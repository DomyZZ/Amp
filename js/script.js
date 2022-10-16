$(function () {
    var values = [1500, 5500, 10500];


    var options = {
        scale: {
            startValue: 0,
            endValue: 15000,
            tickInterval: 500,
            tick: {
                color: "#fff"
            },
            label: {
                useRangeColors: true,
                indentFromTick: 10,
                customizeText: function (arg) {
                    return arg.valueText;
                }
            }
        },
        rangeContainer: {
            palette: "pastel",
            ranges: [
                {startValue: 0, endValue: 1500, color: "#e5000d"},
                {startValue: 1500, endValue: 5000, color: "#e6a10b"},
                {startValue: 5000, endValue: 10000, color: "#d4dd8a"},
                {startValue: 10000, endValue: 15000, color: "#77DD77"}
            ]
        },
        valueIndicator: {
            offset: 40
        },
        subvalueIndicator: {
            type: "textcloud",
            offset: 30,
            text: {
                format: {
                    type: "thousands",
                    precision: 1
                },
                customizeText: function (arg) {
                    return arg.valueText + " KW";
                }
            }
        },
        "export": {
            enabled: false
        },
    };
    var gauge1 = $("#gauge-1").dxCircularGauge($.extend(true, {}, options, {
        value: values[0],
        subvalues: [values[0]],
        valueIndicator: {
            type: "triangleNeedle",
            color: "#8FBC8F"
        },
        title: {
            text: "Power Output from Solar Collectors",
            font: {size: 20},
            horizontalAlignment: "center",
            verticalAlignment: "bottom",
            margin: {
                top: 30
            }

        },
    })).dxCircularGauge("instance");
    var gauge2 = $("#gauge-2").dxCircularGauge($.extend(true, {}, options, {
        value: values[1],
        subvalues: [values[1]],
        valueIndicator: {
            type: "triangleNeedle",
            color: "#8FBC8F"
        },
        title: {
            text: "Power Output from Wind Farms",
            font: {size: 20},
            horizontalAlignment: "center",
            verticalAlignment: "bottom",
            margin: {
                top: 30
            }
        },
    })).dxCircularGauge("instance");
    var gauge3 = $("#gauge-3").dxCircularGauge($.extend(true, {}, options, {
        value: values[2],
        subvalues: [values[2]],
        valueIndicator: {
            type: "triangleNeedle",
            color: "#8FBC8F"
        },
        title: {
            text: "Power Output from Hydro Dams",
            font: {size: 20},
            horizontalAlignment: "center",
            verticalAlignment: "bottom",
            margin: {
                top: 30
            }
        },
    })).dxCircularGauge("instance");


    values.forEach(function (value, i) {
      $(".gv-"+(i+1)).html(value+" KW");
    });


});