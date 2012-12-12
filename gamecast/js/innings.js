function update_inning(var1, var2) { //var1=top/bottom 0/1, var2=inning
			var c=document.getElementById("innings");
			var ctx=c.getContext("2d");
			var scale = 0.2;
			innings.width  = 107*scale;
			innings.height  = 76*scale;
			ctx.strokeStyle='#919191';
			ctx.fillStyle='#919191';
			ctx.beginPath();
			if(var1==0) {
				ctx.moveTo(24*scale,20*scale);
				ctx.lineTo(48*scale,54*scale);
				ctx.lineTo(0*scale,54*scale);
			} else {
				ctx.moveTo(24*scale,54*scale);
				ctx.lineTo(48*scale,20*scale);
				ctx.lineTo(0*scale,20*scale);
			}
			ctx.closePath();

			var fontStyle = 'sizepx Arial'
			fontStyle= fontStyle.replace('size', scale*95);
			ctx.font = (fontStyle);
			ctx.fillText(var2, 50*scale,70*scale);

			ctx.stroke();
			ctx.fill();
		}
