var view360;
			dojo.ready(function () {
				var button = dijit.byId("showPopover");
				dojo.connect(button, "onClick", function () {
					if (!view360) {
						view360 = create360View();
						view360.startup();
					}

					if (!view360.pinned) {
						if (view360.isShowingNow && view360.targetNode === button.domNode) {
							view360.hide();
						} else {
							view360.openAroundCoordinates(100,100);
						}
					}
				});
			});
			
			alert("its working");
			
			function create360View() {
				var toolbarItems = [{
						actionId: "refresh",
						label: "Refresh",
						handler: toolItemHandler,
						iconClass: "button1"
					}, {
						actionId: "clone",
						label: "Clone",
						handler: toolItemHandler,
						iconClass: "button2"
					}, {
						actionId: "create",
						label: "Create",
						handler: toolItemHandler,
						iconClass: "button3"
					}, {
						actionId: "button1",
						label: "Button1",
						handler: toolItemHandler,
						iconClass: "button4"
					}, {
						actionId: "button2",
						label: "Button2",
						handler: toolItemHandler,
						iconClass: "button5"
					}
				];

				var tabItems = [{
						title: "Endpoints(8)",
						href: "samples/grid_for_User360_view.html"
					}, {
						title: "Active Calls(2)",
						href: "samples/grid2_view_360.html"
					}
				];

				var basicInfoData = {
					identifier: "deviceId",
					deviceId: "uniqueDeviceId",

					basicInfo: {
						imageUrl:"images/spackiri.jpg",
						title: "Srinivasan Packirisamy",
						status: "online",
						identityTitle: "MANAGER.SOFTWARE DEVELOPMENT ENGINEERING",
						breadcrumb: [{
								iconClass: "worldIcon",
								label: "US",
								handler: "onWorldIconClick",
								onClickParams: {
									id: "SJO-6500-E-1"
								}
							}, {
								label: "West"
							}, {
								iconClass: "buildingIcon",
								label: "SJ-N, 2nd Floor",
								handler: "onBuildingIconClick",
								onClickParams: {
									id: "SJO-2-F-1122"
								}
							}
						],
						properties: [{
								key: "Username",
								value: "spackiri"
							}, {
								key: "Email",
								value: "spackiri@cisco.com",
								handler: "onNetworkOSTypeClick",
								onClickParams: {
									id: "IOS"
								}
							}, {
								key: "Work",
								value: "1 408 525 2767"
							}, {
								key: "Mobile",
								value: "1 408 525 2768"
							}, {
								key: "Other",
								value: "1 408 525 2769"
							}
						]
					}
				};

				var args = {
					title: "360<sup>o</sup> User View",
					basicInfoData: basicInfoData,
					tabItems: tabItems,
					toolbarItems: toolbarItems,
					view360Class: "testUser",
					tabHeight: 250
				};

				return new xwt.widget.layout.View360(args);
			}

			function toolItemHandler() {
				console.info("toolItemHandler called --->", arguments);
			}

			function onWorldIconClick(item) {
				console.info("itemClicked  ->", arguments);
				alert("Item clicked:" + item.label);
			}

			function onBuildingIconClick(item) {
				console.info("itemClicked  ->", arguments);
				alert("Item clicked:" + item.label);
			}

			function onNetworkOSTypeClick(item) {
				console.info("itemClicked  ->", arguments);
				alert("Item clicked:" + item.value);
			}

			function onTroubleshootClicked() {
				alert("Trobleshoot clicked");
			}

			function onLogTicketClicked() {
				alert("Log Ticket clicked");
			}

			function openTacClicked() {
				alert("Open TAC Case clicked");
			}