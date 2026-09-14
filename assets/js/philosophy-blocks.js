/**
 * ===================================================================
 *  Philosophy Blocks — front-end behaviour
 *
 *  Two things the block supports API has no vocabulary for: the masonry
 *  grid and the scroll reveal. Both are enhancements. The Query Loop
 *  renders a perfectly good CSS grid without either, and nothing here
 *  hides content that the script might then fail to reveal.
 *
 *  Everything positional is set from here rather than from a stylesheet,
 *  so a cached or replaced theme.css cannot leave the grid unusable.
 * ------------------------------------------------------------------- */
( function () {
	'use strict';

	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	/**
	 * Runs a callback at most once per animation frame.
	 *
	 * @param {Function} fn Callback.
	 * @return {Function} Throttled callback.
	 */
	var onFrame = function ( fn ) {
		var queued = false;

		return function () {
			if ( queued ) {
				return;
			}

			queued = true;

			window.requestAnimationFrame( function () {
				queued = false;
				fn();
			} );
		};
	};

	/**
	 * Turns a Query Loop's grid into a masonry.
	 *
	 * The post template is a CSS grid whose column count comes from the block's
	 * own layout settings, so the responsive behaviour is still the editor's to
	 * control. This only removes the row gaps that a grid leaves under a short
	 * card.
	 *
	 * @param {HTMLElement} list The post-template element.
	 */
	var layoutMasonry = function ( list ) {
		var bricks = Array.prototype.slice.call( list.children );

		if ( ! bricks.length ) {
			return;
		}

		var reset = function () {
			list.style.position = '';
			list.style.height = '';

			bricks.forEach( function ( brick ) {
				brick.style.position = '';
				brick.style.left = '';
				brick.style.top = '';
				brick.style.width = '';
			} );
		};

		var layout = function () {
			reset();

			var listWidth = list.clientWidth;
			var first = bricks[ 0 ].getBoundingClientRect();

			if ( ! listWidth || ! first.width ) {
				return;
			}

			var columns = Math.max( 1, Math.round( listWidth / first.width ) );

			// One column is the document flow already; leave it alone so the
			// phone layout needs no JavaScript at all.
			if ( 1 === columns ) {
				return;
			}

			var styles = window.getComputedStyle( list );
			var gap = parseFloat( styles.columnGap || styles.gap ) || 0;
			var columnWidth = ( listWidth - gap * ( columns - 1 ) ) / columns;
			var heights = new Array( columns ).fill( 0 );

			list.style.position = 'relative';

			bricks.forEach( function ( brick ) {
				brick.style.position = 'absolute';
				brick.style.width = columnWidth + 'px';

				var shortest = heights.indexOf( Math.min.apply( null, heights ) );

				brick.style.left = ( shortest * ( columnWidth + gap ) ) + 'px';
				brick.style.top = heights[ shortest ] + 'px';

				heights[ shortest ] += brick.getBoundingClientRect().height + gap;
			} );

			list.style.height = ( Math.max.apply( null, heights ) - gap ) + 'px';
		};

		var relayout = onFrame( layout );

		layout();

		// Images without intrinsic dimensions change a card's height the moment
		// they decode.
		Array.prototype.forEach.call( list.querySelectorAll( 'img' ), function ( img ) {
			if ( img.complete ) {
				return;
			}

			img.addEventListener( 'load', relayout );
			img.addEventListener( 'error', relayout );
		} );

		window.addEventListener( 'load', relayout );
		window.addEventListener( 'resize', relayout );

		if ( window.ResizeObserver ) {
			new window.ResizeObserver( relayout ).observe( list );
		}

		if ( document.fonts && document.fonts.ready ) {
			document.fonts.ready.then( relayout );
		}
	};

	/**
	 * Finds every masonry grid on the page.
	 */
	var initMasonry = function () {
		var lists = document.querySelectorAll( '.philosophy-masonry .wp-block-post-template' );

		Array.prototype.forEach.call( lists, layoutMasonry );
	};

	/**
	 * Reveals cards as they scroll into view.
	 *
	 * The hidden state is added by this function, never by the stylesheet, so a
	 * page whose script fails still shows everything.
	 */
	var initReveal = function () {
		if ( reduceMotion || ! window.IntersectionObserver || window.innerWidth < 768 ) {
			return;
		}

		var items = document.querySelectorAll( '.philosophy-masonry__brick, .philosophy-featured__panel' );

		if ( ! items.length ) {
			return;
		}

		var observer = new window.IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( ! entry.isIntersecting ) {
					return;
				}

				entry.target.classList.add( 'is-revealed' );
				observer.unobserve( entry.target );
			} );
		}, { rootMargin: '0px 0px -5% 0px', threshold: 0.05 } );

		Array.prototype.forEach.call( items, function ( item ) {
			item.classList.add( 'philosophy-reveal' );
			observer.observe( item );
		} );
	};

	/**
	 * Turns the header's search block into the design's full-page overlay.
	 *
	 * Progressive enhancement: the block renders an ordinary inline search form,
	 * which works on its own. This replaces it with a labelled trigger and moves
	 * the form into an overlay, so nothing is hidden that the script might then
	 * fail to reveal.
	 */
	var initSearch = function () {
		var l10n = window.philosophyBlocksL10n || {};
		var wrap = document.querySelector( '.philosophy-header__search' );

		if ( ! wrap || wrap.dataset.philosophyOverlay ) {
			return;
		}

		// core/search renders the form as the wrapper itself, not inside it.
		var form = 'FORM' === wrap.tagName ? wrap : wrap.querySelector( 'form' );
		var field = wrap.querySelector( 'input[type="search"]' );

		if ( ! form || ! field ) {
			return;
		}

		wrap.dataset.philosophyOverlay = 'true';

		var trigger = document.createElement( 'button' );
		trigger.type = 'button';
		trigger.className = 'philosophy-search__trigger';
		trigger.setAttribute( 'aria-expanded', 'false' );
		trigger.setAttribute( 'aria-controls', 'philosophy-search' );
		trigger.textContent = l10n.search || 'Search';

		var overlay = document.createElement( 'div' );
		overlay.className = 'philosophy-search';
		overlay.id = 'philosophy-search';

		var close = document.createElement( 'button' );
		close.type = 'button';
		close.className = 'philosophy-search__close';
		close.setAttribute( 'aria-label', l10n.closeSearch || 'Close the search form' );
		close.innerHTML = '<span aria-hidden="true">&times;</span>';

		var hint = document.createElement( 'p' );
		hint.className = 'philosophy-search__hint';
		hint.textContent = l10n.hint || '';

		wrap.parentNode.insertBefore( trigger, wrap );
		overlay.appendChild( close );
		overlay.appendChild( wrap );
		wrap.appendChild( hint );
		document.body.appendChild( overlay );

		var body = document.body;

		var open = function () {
			body.classList.add( 'philosophy-search-is-open' );
			trigger.setAttribute( 'aria-expanded', 'true' );

			window.setTimeout( function () {
				field.focus();
			}, 100 );
		};

		var hide = function ( refocus ) {
			if ( ! body.classList.contains( 'philosophy-search-is-open' ) ) {
				return;
			}

			body.classList.remove( 'philosophy-search-is-open' );
			trigger.setAttribute( 'aria-expanded', 'false' );
			field.blur();

			if ( refocus ) {
				trigger.focus();
			}
		};

		trigger.addEventListener( 'click', open );
		close.addEventListener( 'click', function () {
			hide( true );
		} );

		// The backdrop closes; the form itself does not.
		overlay.addEventListener( 'click', function ( event ) {
			if ( ! event.target.closest( 'form' ) && ! event.target.closest( '.philosophy-search__close' ) ) {
				hide( true );
			}
		} );

		document.addEventListener( 'keydown', function ( event ) {
			if ( 'Escape' === event.key ) {
				hide( true );
			}
		} );
	};

	var init = function () {
		initMasonry();
		initReveal();
		initSearch();
	};

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
