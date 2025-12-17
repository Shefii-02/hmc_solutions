$(function () {

	var siteSticky = function () {
		$(".js-sticky-header").sticky({ topSpacing: 0 });
	};
	siteSticky();

	var siteMenuClone = function () {

		$('.js-clone-nav').each(function () {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function () {

			var counter = 0;
			$('.site-mobile-menu .has-children').each(function () {
				var $this = $(this);

				$this.prepend('<span class="arrow-collapse collapsed">');

				$this.find('.arrow-collapse').attr({
					'data-toggle': 'collapse',
					'data-target': '#collapseItem' + counter,
				});

				$this.find('> ul').attr({
					'class': 'collapse',
					'id': 'collapseItem' + counter,
				});

				counter++;

			});

		}, 1000);

		$('body').on('click', '.arrow-collapse', function (e) {
			var $this = $(this);
			if ($this.closest('li').find('.collapse').hasClass('show')) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
			e.preventDefault();

		});

		$(window).resize(function () {
			var $this = $(this),
				w = $this.width();

			if (w > 768) {
				if ($('body').hasClass('offcanvas-menu')) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

	$('body').on('click touchend', '.js-menu-toggle', function (e) {
		var $this = $(this);
		e.preventDefault();
		e.stopPropagation();

		if ($('body').hasClass('offcanvas-menu')) {
			$('body').removeClass('offcanvas-menu');
			$this.removeClass('active');
			$('.site-menu-toggle').removeClass('active');
		} else {
			$('body').addClass('offcanvas-menu');
			$this.addClass('active');
		}
	})

	// click outside offcanvas
	$(document).on('mouseup touchend', function (e) {
		var container = $(".site-mobile-menu");
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			if ($('body').hasClass('offcanvas-menu')) {
				$('body').removeClass('offcanvas-menu');
				$('.js-menu-toggle').removeClass('active');
				$('.site-menu-toggle').removeClass('active');
			}
		}
	});
	};
	siteMenuClone();
	$heroOwl = $('.owl-carousel');
	$heroOwl.owlCarousel({
		loop: true,
		margin: 10,
		items: 1,
		nav: true,
		navText: ['<i class="bi bi-chevron-double-left"></i>', '<i class="bi bi-chevron-double-right"></i>'],
		dots: true,
		autoplayHoverPause: true,
		// animateIn: 'fadeIn',
		autoplay: true,
		autoplaySpeed: 1000,
		// animateOut: 'fadeOut',
	});
	$('.heroOwlNextBtn').click(function () {
		owl.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.heroOwlPrevBtn').click(function () {
		// With optional speed parameter
		// Parameters has to be in square bracket '[]'
		owl.trigger('prev.owl.carousel', [300]);
	})
	$(window).on('load', function () {
		if ($('#preloader').length) {
			$('#preloader').delay(100).fadeOut(500);
		}
	});
	$('.counter').countTo();
	new WOW().init();

	// Check if there's a hash in the URL and show the corresponding tab
	var hash = window.location.hash;
	if (hash) {
		$('a[href="' + hash + '"]').tab('show');
	} else {
		$('#reporting-tab').tab('show'); // Default tab
	}

	// Update the URL hash when a tab is clicked
	$('a[data-toggle="tab"]').on('click', function () {
		var target = $(this).attr('href');
		window.history.pushState(null, null, target);
	});
	Fancybox.bind("[data-fancybox]", {
		// Your custom options
	});
	$(document).ready(function () {
		// Function to handle tab changes
		function handleTabChange(tabId, isSubTab, parentTabId) {
			var hash;
			if (isSubTab && parentTabId) {
				hash = '#' + parentTabId + '#' + tabId;
			} else {
				hash = '#' + tabId;
			}
			history.replaceState(null, null, hash);
		}

		// Function to activate tab based on URL hash
		function activateTabFromHash() {
			var hash = window.location.hash;
			if (!hash) {
				// If no hash, activate default tab
				$('#reporting-tab').tab('show');
				return;
			}

			var parts = hash.split('#').filter(Boolean);

			if (parts.length === 1) {
				// Single hash - main tab
				var tabId = parts[0];
				var tab = $('#' + tabId + '-tab');
				if (tab.length) {
					tab.tab('show');

					// If this tab has sub-tabs, activate the first one
					var subTabs = tab.closest('.tab-pane').find('.sub-tabs .nav-link');
					if (subTabs.length) {
						var firstSubTab = subTabs.first();
						var subTabId = firstSubTab.attr('aria-controls');
						handleTabChange(subTabId, true, tabId);
						firstSubTab.tab('show');
					}
				}
			} else if (parts.length === 2) {
				// Double hash - main tab and sub-tab
				var parentTabId = parts[0];
				var subTabId = parts[1];
				var parentTab = $('#' + parentTabId + '-tab');
				var subTab = $('#' + subTabId + '-tab');

				if (parentTab.length && subTab.length) {
					parentTab.tab('show');
					// Wait for parent tab to be shown before showing sub tab
					parentTab.one('shown.bs.tab', function() {
						subTab.tab('show');
					});
				}
			}
		}

		// Handle main tab changes
		$('#investorTabs .nav-link').on('shown.bs.tab', function (e) {
			var tabId = $(e.target).attr('aria-controls');
			var subTabs = $('#' + tabId + ' .sub-tabs .nav-link');

			if (subTabs.length) {
				// If tab has sub-tabs, activate the first one
				var firstSubTab = subTabs.first();
				var subTabId = firstSubTab.attr('aria-controls');
				handleTabChange(subTabId, true, tabId);
				firstSubTab.tab('show');
			} else {
				handleTabChange(tabId, false);
			}
		});

		// Handle sub-tab changes
		$('.sub-tabs .nav-link').on('shown.bs.tab', function (e) {
			var tabId = $(e.target).attr('aria-controls');
			var parentTabId = $(e.target).closest('.tab-pane').attr('id');
			handleTabChange(tabId, true, parentTabId);
		});

		// Activate tab based on URL hash when page loads
		$(window).on('load', function() {
			activateTabFromHash();
		});

		// Handle browser back/forward button
		$(window).on('hashchange', function () {
			activateTabFromHash();
		});
	});
});