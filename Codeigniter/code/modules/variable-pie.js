/*
 Highcharts JS v8.0.0 (2019-12-10)

 Variable Pie module for Highcharts

 (c) 2010-2019 Grzegorz Blachliski

 License: www.highcharts.com/license
*/
(function(b){"object"===typeof module&&module.exports?(b["default"]=b,module.exports=b):"function"===typeof define&&define.amd?define("highcharts/modules/variable-pie",["highcharts"],function(g){b(g);b.Highcharts=g;return b}):b("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(b){function g(b,e,g,n){b.hasOwnProperty(e)||(b[e]=n.apply(null,g))}b=b?b._modules:{};g(b,"modules/variable-pie.src.js",[b["parts/Globals.js"],b["parts/Utilities.js"]],function(b,e){var g=e.arrayMax,n=e.arrayMin,
w=e.clamp,p=e.pick,x=b.fireEvent;e=b.seriesType;var y=b.seriesTypes.pie.prototype;e("variablepie","pie",{minPointSize:"10%",maxPointSize:"100%",zMin:void 0,zMax:void 0,sizeBy:"area",tooltip:{pointFormat:'<span style="color:{point.color}">\u25cf</span> {series.name}<br/>Value: {point.y}<br/>Size: {point.z}<br/>'}},{pointArrayMap:["y","z"],parallelArrays:["x","y","z"],redraw:function(){this.center=null;y.redraw.call(this,arguments)},zValEval:function(a){return"number"!==typeof a||isNaN(a)?null:!0},
calculateExtremes:function(){var a=this.chart,b=this.options;var c=this.zData;var e=Math.min(a.plotWidth,a.plotHeight)-2*(b.slicedOffset||0),l={};a=this.center||this.getCenter();["minPointSize","maxPointSize"].forEach(function(a){var c=b[a],k=/%$/.test(c);c=parseInt(c,10);l[a]=k?e*c/100:2*c});this.minPxSize=a[3]+l.minPointSize;this.maxPxSize=w(a[2],a[3]+l.minPointSize,l.maxPointSize);c.length&&(a=p(b.zMin,n(c.filter(this.zValEval))),c=p(b.zMax,g(c.filter(this.zValEval))),this.getRadii(a,c,this.minPxSize,
this.maxPxSize))},getRadii:function(a,b,c,e){var l=0,g=this.zData,q=g.length,k=[],p="radius"!==this.options.sizeBy,u=b-a;for(l;l<q;l++){var h=this.zValEval(g[l])?g[l]:a;h<=a?h=c/2:h>=b?h=e/2:(h=0<u?(h-a)/u:.5,p&&(h=Math.sqrt(h)),h=Math.ceil(c+h*(e-c))/2);k.push(h)}this.radii=k},translate:function(a){this.generatePoints();var b=0,c=this.options,e=c.slicedOffset,g=e+(c.borderWidth||0),t=c.startAngle||0,q=Math.PI/180*(t-90),k=Math.PI/180*(p(c.endAngle,t+360)-90);t=k-q;var n=this.points,u=c.dataLabels.distance;
c=c.ignoreHiddenPoint;var h=n.length;this.startAngleRad=q;this.endAngleRad=k;this.calculateExtremes();a||(this.center=a=this.getCenter());for(k=0;k<h;k++){var f=n[k];var m=this.radii[k];f.labelDistance=p(f.options.dataLabels&&f.options.dataLabels.distance,u);this.maxLabelDistance=Math.max(this.maxLabelDistance||0,f.labelDistance);var d=q+b*t;if(!c||f.visible)b+=f.percentage/100;var r=q+b*t;f.shapeType="arc";f.shapeArgs={x:a[0],y:a[1],r:m,innerR:a[3]/2,start:Math.round(1E3*d)/1E3,end:Math.round(1E3*
r)/1E3};d=(r+d)/2;d>1.5*Math.PI?d-=2*Math.PI:d<-Math.PI/2&&(d+=2*Math.PI);f.slicedTranslation={translateX:Math.round(Math.cos(d)*e),translateY:Math.round(Math.sin(d)*e)};var v=Math.cos(d)*a[2]/2;var w=Math.sin(d)*a[2]/2;r=Math.cos(d)*m;m*=Math.sin(d);f.tooltipPos=[a[0]+.7*v,a[1]+.7*w];f.half=d<-Math.PI/2||d>Math.PI/2?1:0;f.angle=d;v=Math.min(g,f.labelDistance/5);f.labelPosition={natural:{x:a[0]+r+Math.cos(d)*f.labelDistance,y:a[1]+m+Math.sin(d)*f.labelDistance},"final":{},alignment:f.half?"right":
"left",connectorPosition:{breakAt:{x:a[0]+r+Math.cos(d)*v,y:a[1]+m+Math.sin(d)*v},touchingSliceAt:{x:a[0]+r,y:a[1]+m}}}}x(this,"afterTranslate")}});""});g(b,"masters/modules/variable-pie.src.js",[],function(){})});
//# sourceMappingURL=variable-pie.js.map