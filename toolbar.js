function create3DToolBar(container){

    var toolbarConatiner = dojo.create('div', {
    	"class": "toolbarContainer"
    });
    //debugger;
    var toolbar = new xwt.widget.toolbar.Toolbar({id: "threeDtoolbar"});
    toolbarConatiner.appendChild(toolbar.domNode);
    container.appendChild( toolbarConatiner );

    var searchMenu = new dijit.Menu({id: "searchMenu"});
    searchMenu.addChild(new dijit.MenuItem({id: "smenu1", label: "smenu1"}));
    var searchBtn = new dijit.form.DropDownButton({
    	id: "searchBtn", label: "", dropDown: searchMenu, baseClass: "menubutton"
    });
    dojo.addClass(searchBtn.domNode, "plainBtn searchBtn");
    toolbar.addChild(searchBtn);

    var seperator1 = new dijit.ToolbarSeparator();
    // debugger;
    toolbar.addChild(seperator1);

    var topologyBtn = new xwt.widget.form.TextButton({
    	baseClass: "menubutton",
    	label: ""
    });

    dojo.addClass(topologyBtn.domNode, "plainBtn topologyBtn");

    toolbar.addChild(topologyBtn);


    var printBtn = new xwt.widget.form.TextButton({
    	baseClass: "menubutton",
    	label: ""
    });

    dojo.addClass(printBtn.domNode, "plainBtn printBtn");

    toolbar.addChild(printBtn);

    var seperator1 = new dijit.ToolbarSeparator();               
    toolbar.addChild(seperator1);

    var showBtn = new xwt.widget.form.TextButton({
    	//baseClass: "menubutton",
    	label: "Show"
    });

    var pop = new xwt.widget.layout.Popover({
    	 sideAlign: false,
    	 pinnable: false,
    	 showHelp: false,
    	 anchorNodes: "a0,a1,a2"
    });

    dojo.addClass(pop.domNode, "showBtnPopover");

    var menuItemsContainer = dojo.create("div", {
    	"class": "menuItemsContainer"
    });

    var popMenuItems = new dijit.Menu({id: "popMenuItems"});            	

    var popMenuItem1 = new dijit.CheckedMenuItem({
    	checked: true,
    	label: "Labels"                	
    });

    var popMenuItem2 = new dijit.CheckedMenuItem({
    	checked: true,
    	label: "Links",
    	onChange: function(){
    		alert("Links");
        }           	
    });

    var popMenuItem3 = new dijit.CheckedMenuItem({
    	checked: true,
    	label: "Aggregated Links"                	
    });

    var menuSeparator =  new dijit.MenuSeparator();

    var popMenuItem4 = new dijit.CheckedMenuItem({
    	checked: true,
    	label: "Faults"                	
    });

    popMenuItems.addChild(popMenuItem1);
    popMenuItems.addChild(popMenuItem2);
    popMenuItems.addChild(popMenuItem3);
    popMenuItems.addChild(menuSeparator);
    popMenuItems.addChild(popMenuItem4);

    menuItemsContainer.appendChild(popMenuItems.domNode);

    var vs = new xwt.widget.form.VerticalSlider({
    	id: "faultSlider",
    	numericMargin: 0,
    	style: "height:180px; margin-left: 60px;",
    	minimum: 0,
    	maximum: 100,
    	discreteValues: 5,
    	count: 5,
    	labels: ["Critical", "Major", "Minor", "Warning", "Informational"]
    });
    
    dojo.connect(vs, "onChange", function(){
    	alert("its working");
    });
    
     
    	
    menuItemsContainer.appendChild(vs.domNode);

    pop.set("content", menuItemsContainer);

    dojo.connect(popMenuItem4, "onChange", function(ckd){
    	if(ckd){
    		console.log("checked", ckd);
    		vs.set("disabled", false);
    	}
    	else {
    		console.log("checked", ckd);
    		vs.set("disabled", true);
    	}
    });

    dojo.connect(showBtn, "onClick", function(){
    	if(!pop.pinned){
    		if(pop.isShowingNow && pop.targetNode === showBtn.domNode){
    			pop.hide();
    		}else{
    			pop.openAroundNode(showBtn.domNode);
    		}
    	}
    });

    toolbar.addChild(showBtn);


    var routeMenu = new dijit.Menu({id: "routeMenu"});
    routeMenu.addChild(new dijit.MenuItem({id: "rmenu1", label: "rmenu1"}));
    var routeBtn = new dijit.form.DropDownButton({
    	id: "routeBtn", label: "Route", dropDown: routeMenu, baseClass: "menubutton"
    });
    dojo.addClass(routeBtn.domNode, "routeBtn");
    toolbar.addChild(routeBtn);

    var filterBtn = new dijit.form.ToggleButton({
    	//baseClass: "menubutton",
    	label: ""
    });

    dojo.addClass(filterBtn.domNode, "filterBtn");

    var fPop = new xwt.widget.layout.Popover({
    	 sideAlign: false,
    	 pinnable: false,
    	 showHelp: false,
    	 anchorNodes: "a0,a1,a2"
    });

    dojo.addClass(fPop.domNode, "showFilterPopover");

    var fMenuItemsContainer = dojo.create("div", {
    	"class": "filterMenuItemsContainer"
    });

    var fPopMenuItems = new dijit.Menu({id: "filterPopMenuItems"});            	

    fMenuItemsContainer.appendChild(fPopMenuItems.domNode);

    var fvs = new xwt.widget.form.VerticalSlider({
    	id: "layerSlider",
    	numericMargin: 0,
    	style: "height:180px; margin-left: 60px;",
    	minimum: 0,
    	maximum: 100,
    	discreteValues: 5,
    	count: 5,
    	labels: ["OTS", "OMS", "OCH", "OTU", "ODU"]
    	});
    	
    
    fMenuItemsContainer.appendChild(fvs.domNode);

    // debugger;

    fPop.set("content", fMenuItemsContainer);

    dojo.connect(filterBtn, "onClick", function(){
    	if(!fPop.pinned){
    		if(fPop.isShowingNow && fPop.targetNode === filterBtn.domNode){
    			fPop.hide();							
    		}else{
    			fPop.openAroundNode(filterBtn.domNode);
    		}
    	}
    });
    

    
    dojo.connect(fvs, "onClick", function(){
    	alert("changed layer");
    });

    dojo.connect(fPop, "hide", function(){
    	filterBtn.setChecked(false);
    });

    dojo.connect(dojo.body(), "click", function(evt){
    	if(fPop.isShowingNow && !dojo.isDescendant(evt.target, fPop.domNode)) {
    		if(!dojo.isDescendant(evt.target, fPop.targetNode)){
    			fPop.hide();
    		}						
    	}
    	if(pop.isShowingNow && !dojo.isDescendant(evt.target, pop.domNode)) {
    		if(!dojo.isDescendant(evt.target, pop.targetNode)){
    			pop.hide();
    		}						
    	}
    });

    toolbar.addChild(filterBtn);
}