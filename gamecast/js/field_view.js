$(document).ready(function() {
	var c=document.getElementById("field_view");
	var ctx=c.getContext("2d");
	var scale = 0.9;
	field_view.width=330*scale;
	field_view.height=300*scale;

	ctx.scale(scale,scale);
	ctx.moveTo(148,14);
	ctx.lineTo(307,136);
	ctx.lineTo(308,142);
	ctx.lineTo(279,191);
	ctx.lineTo(188,298);
	ctx.lineTo(176,298);
	ctx.lineTo(19,144);
	ctx.lineTo(9,128);
	ctx.lineTo(75,88);
	ctx.closePath();
	ctx.strokeStyle = '#15682D';
	ctx.stroke();
	ctx.fillStyle = '#15682D';
	ctx.fill();

	ctx.beginPath();
	ctx.strokeStyle = '#FFFFFF';
	ctx.moveTo(18,122);
	ctx.lineTo(179,276);
	ctx.lineTo(304,150);
	ctx.lineWidth = 2;
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(174,271);
	ctx.lineTo(174,281);
	ctx.lineTo(178,281);
	ctx.lineTo(178,276);
	ctx.moveTo(185,270);
	ctx.lineTo(185,281);
	ctx.lineTo(181,281);
	ctx.lineTo(181,275);
	ctx.closePath();
	ctx.lineWidth = 1.5;
	ctx.stroke();

	ctx.beginPath();
	ctx.arc(208,243,1,0, 2*Math.PI);
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(149,244 ,1,0, 2*Math.PI);
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(178,214 ,1,0, 2*Math.PI);
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(176,246);
	ctx.lineTo(181,246);
	ctx.stroke();

	ctx.fillStyle = '#000000';
	ctx.font="12px Arial";
	ctx.fillText("298",136,12);
	ctx.fillText("229",309,139);
	ctx.fillText("237",2,120);
	ctx.font="10px Arial";
	ctx.fillText("232",58,86);

});