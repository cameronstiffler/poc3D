<?PHP
$data = '{
    "label": "text",
    "id": "id",
    "height":"1000",
    "width":"80",
    "portcolor":"0x333333",
    "linecolor":"0x087ab4",
    "linkcolor":"0x087ab4",
    "linklabelcolor":"0xFFFFFF",
    "losslabelcolor":"0xFFFFFF",
    "labelcolor":"0x464646",
    "linelabelcolor":"0x464646",
	"linelabelbackgroundcolor":"0x00FFFF",
    "portlabelcolor":"0x464646",
    "losscolor":"0x9122D1",
    "powercolor":"0x61907F",
    "layers": [
           	{
            "label": "OTS",
            "group":"2",
            "color": "0xEAFDFE",
            "id": "2",
            "elements": [
                {
                    "type": "model",
                    "name": "dot",
                    "id": "1",
                    "label": "NCS 4016",
                    "x": "-200",
                    "y": "450",
                    "color": "0xEAFDFE"
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "2",
                    "label": "NCS 2006",
                    "x": "-50",
                    "y": "450",
                    "color": "0xEAFDFE",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8001",
                	    "label": "1/1/5/1",
                	    "x": "-20",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_minor_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "3",
                    "label": "NCS 2002",
                    "x": "100",
                    "y": "450",
                    "color": "0xEAFDFE",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8002",
                	    "label": "1/1/1/1",
                	    "x": "70",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1" 
            	    	},
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8003",
                	    "label": "1/1/1/12",
                	    "x": "130",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_minor_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5001",
                    	"label": "text",
                    	"start": "port_8001",
                    	"end": "port_8002",
                    	"color": "0x6666FF",
              	      	"badge": "Alert_major_16"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5002",
                    	"label": "text",
                    	"start": "port_8002",
                    	"end": "port_8003",
                    	"color": "0x6666FF",
              	      	"badge": "Alert_minor_16"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "4",
                    "label": "NCS 2006",
                    "x": "250",
                    "y": "450",
                    "color": "0xEAFDFE",
            		"elements": [
                		
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8004",
                	    "label": "1/1/5/1",
                	    "x": "220",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5003",
                    	"label": "text",
                    	"start": "port_8003",
                    	"end": "port_8004",
                    	"color": "0x6666FF",
              	      	"badge": "Alert_minor_16"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "5",
                    "label": "NCS 4016",
                    "x": "400",
                    "y": "450",
                    "color": "0xEAFDFE"
                }
            ]
        },
        {
            "label": "OMS",
            "color": "0xD8FDFC",
            "group":"4",
            "id": "3",
            "elements": [
                {
                    "type": "model",
                    "name": "dot",
                    "id": "1",
                    "label": "NCS 4016",
                    "x": "-200",
                    "y": "450",
                    "color": "0xD8FDFC"
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "2",
                    "label": "NCS 2006",
                    "x": "-50",
                    "y": "450",
                    "color": "0xD8FDFC"
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "4",
                    "label": "NCS 2006",
                    "x": "250",
                    "y": "450",
                    "color": "0xD8FDFC"
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "5",
                    "label": "NCS 4016",
                    "x": "400",
                    "y": "450",
                    "color": "0xD8FDFC"
                }
            ]
        },
        {
            "label": "OCH",
            "color": "0xCAFAFC",
            "group":"4",
            "id": "4",
            "elements": [
                {
                    "type": "model",
                    "name": "dot",
                    "id": "1",
                    "label": "NCS 4016",
                    "x": "-200",
                    "y": "450",
                    "color": "0xCAFAFC",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8005",
                	    "label": "0/0/0/0",
                	    "x": "-170",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "2",
                    "label": "NCS 2006",
                    "x": "-50",
                    "y": "450",
                    "color": "0xCAFAFC",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8006",
                	    "label": "1/1/1/1",
                	    "x": "-80",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8007",
                	    "label": "1/1/1/1",
                	    "x": "-20",
                	    "y": "450",
              	      	"color": "0x919191",
                    	"badge": "Alert_critical_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "link",
                    	"style": "dashed",
                    	"id": "5005",
                    	"label": "Test Link",
                    	"start": "port_8007",
                    	"end": "port_8009",
                    	"startloss":"-15.0",
                    	"endloss":"-10.2",
                    	"color": "0x666666",
              	      	"badge": "Alert_major_16"
                		},	
                		{
                		"type": "link",
                    	"style": "dashed",
                    	"id": "5019",
                    	"label": "Test Link",
                    	"start": "port_8006",
                    	"end": "port_8008",
                    	"startloss":"-15.0",
                    	"endloss":"-10.2",
                    	"color": "0x666666",
              	      	"badge": "Alert_major_16"
                		},	
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5004",
                    	"start": "port_8007",
                    	"end": "port_8001",
                    	"startloss":"-15.0",
                    	"endloss":"-10.2",
                    	"color": "0x666666"
                		},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5007",
                    	"label": "text",
                    	"start": "port_8006",
                    	"end": "port_8005",
                    	"color": "0x6666FF"
                		},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5007",
                    	"label": "text",
                    	"start": "port_8006",
                    	"end": "port_8007",
                    	"color": "0x6666FF"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "4",
                    "label": "NCS 2006",
                    "x": "250",
                    "y": "450",
                    "color": "0xCAFAFC",
            		"elements": [	
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8008",
                	    "label": "1/1/2/2",
                	    "x": "280",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8009",
                	    "label": "1/1/1/1",
                	    "x": "220",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5009",
                    	"start": "port_8009",
                    	"end": "port_8004",
                    	"color": "0x6666FF"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5010",
                    	"label": "text",
                    	"start": "port_8009",
                    	"end": "port_8008",
                    	"color": "0x6666FF"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "5",
                    "label": "NCS 4016",
                    "x": "400",
                    "y": "450",
                    "color": "0xCAFAFC",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8010",
                	    "label": "0/0/0/0",
                	    "x": "370",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5011",
                    	"label": "text",
                    	"start": "port_8010",
                    	"end": "port_8009",
                    	"color": "0x6666FF"
                		}
                	]
                }
            ]
        },
        {
            "label": "OTU",
            "color": "0xFCECFC",
            "group":"4",
            "id": "5",
            "elements": [
                {
                    "type": "model",
                    "name": "dot",
                    "id": "1",
                    "label": "NCS 4016",
                    "x": "-200",
                    "y": "450",
                    "color": "0xFCECFC",
            		"elements": [
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8011",
                	    "label": "0/0/0/0",
                	    "x": "-170",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5021",
                    	"start": "port_8011",
                    	"end": "port_8005",
                    	"color": "0x6666FF"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "5",
                    "label": "NCS 4016",
                    "x": "400",
                    "y": "450",
                    "color": "0xFCECFC",
            		"elements": [
            			
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8012",
                	    "label": "0/0/0/0",
                	    "x": "370",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5012",
                    	"start": "port_8010",
                    	"end": "port_8012",
                    	"color": "0x6666FF"
                		}
                	]
                }
            ]
        },
        {
            "label": "ODU",
            "color": "0xF9E2FC",
            "group":"7",
            "id": "6",
            "elements": [
                {
                    "type": "model",
                    "name": "dot",
                    "id": "1",
                    "label": "NCS 4016",
                    "x": "-200",
                    "y": "450",
                    "color": "0xF9E2FC",
            		"elements": [
                		
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8013",
                	    "label": "0/3/0/2/10",
                	    "x": "-230",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
            	        "type": "port",
						"name": "port2",
            	        "id": "port_8014",
                	    "label": "0/0/0/0/10",
                	    "x": "-170",
                	    "y": "450",
                	    "color": "0x919191",
                	    "badge": "Alert_major_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5013",
                    	"start": "port_8013",
                    	"end": "port_8014",
                    	"color": "0x6666FF",
              	      	"badge": "Alert_minor_16"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5014",
                    	"start": "port_8011",
                    	"end": "port_8014",
                    	"color": "0x6666FF"
                		}
                	]
                },
                {
                    "type": "model",
                    "name": "dot",
                    "id": "5",
                    "label": "NCS 4016",
                    "x": "400",
                    "y": "450",
                    "color": "0xF9E2FC",
            		"elements": [
                		
                    	{
                	    "type": "port",
                	    "name": "port1",
                	    "id": "port_8015",
                	    "label": "0/3/0/2/10",
                	    "x": "430",
                	    "y": "450",
              	      	"color": "0x919191",
              	      	"badge": "Alert_minor_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
            	    	},
            	    	{
            	        "type": "port",
						"name": "port2",
            	        "id": "port_8016",
                	    "label": "0/0/0/0/10",
                	    "x": "370",
                	    "y": "450",
                	    "color": "0x919191",
                	    "badge": "Alert_minor_16",
              	      	"tx":"-10.1",
              	      	"rx":"-12.1"
                		},
                		{
                		"type": "link",
                    	"style": "solid",
                    	"id": "5015",
                    	"label": "Second Longest Link",
                    	"start": "port_8014",
                    	"end": "port_8016",
                    	"startloss":"-15.0",
                    	"endloss":"-10.2",
                    	"color": "0x666666",
              	      	"badge": "Alert_major_16"
                		},
                		{
                		"type": "link",
                    	"style": "solid",
                    	"id": "5016",
                    	"label": "Longest Link",
                    	"start": "port_8013",
                    	"end": "port_8015",
                    	"startloss":"-15.0",
                    	"endloss":"-10.2",
                    	"color": "0x666666",
              	      	"badge": "Alert_major_16"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5017",
                    	"start": "port_8016",
                    	"end": "port_8012",
                    	"color": "0x6666FF"
                		},
                		{
                		"type": "line",
                    	"style": "solid",
                    	"id": "5018",
                    	"label": "text",
                    	"start": "port_8015",
                    	"end": "port_8016",
                    	"color": "0x6666FF",
              	      	"badge": "Alert_major_16"
                		}
                	]
                }
            ]
        }
    ]
}';
header('Content-Type: application/json','Access-Control-Allow-Origin : *');
echo $data;


