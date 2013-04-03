			$(document).ready(function () {
				var A = [-1,-1,-1,-1,-1,-1]; // points
				var B = [-1,-1,-1,-1,-1,-1]; // row #
				$("#girls .points span").each(function(index) {
					A[index] = $(this).html();
					B[index] = index;
				});
				var all = [];
				for (var i = 0; i < B.length; i++) { all.push({ 'A': A[i], 'B': B[i] }); }
				all.sort(function(a, b) { return a.A - b.A; });
				A = []; B = [];
				for (var i = 0; i < all.length; i++) { A.push(all[i].A); B.push(all[i].B); }
				
				A.reverse(); B.reverse();
				var badges = [1,2,3,-1,-1,-1]; // badges
				for(x = 0; x < 6; x++) { if(A[x] == A[x+1]) badges.splice(x, 0, badges[x]); }
				
				$("#girls .points span").each(function(index) {
					if($(this).html() == "") return true;
					if(badges[B.indexOf(index)] == 1) $(this).parent().append('<span class="badge badge-warning" style="position: absolute;margin-top: 2px;">1st</span>');
					if(badges[B.indexOf(index)] == 2) $(this).parent().append('<span class="badge badge-success" style="position: absolute;margin-top: 2px;">2nd</span>');
					if(badges[B.indexOf(index)] == 3) $(this).parent().append('<span class="badge badge-important" style="position: absolute;margin-top: 2px;">3rd</span>');
				});
				
				
				/* Boys */
				
				var A = [-1,-1,-1,-1,-1,-1]; // points
				var B = [-1,-1,-1,-1,-1,-1]; // row #
				$("#boys .points span").each(function(index) {
					A[index] = $(this).html();
					B[index] = index;
				});
				var all = [];
				for (var i = 0; i < B.length; i++) { all.push({ 'A': A[i], 'B': B[i] }); }
				all.sort(function(a, b) { return a.A - b.A; });
				A = []; B = [];
				for (var i = 0; i < all.length; i++) { A.push(all[i].A); B.push(all[i].B); }
				
				A.reverse(); B.reverse();
				var badges = [1,2,3,-1,-1,-1]; // badges
				for(x = 0; x < 6; x++) { if(A[x] == A[x+1]) badges.splice(x, 0, badges[x]); }
				
				$("#boys .points span").each(function(index) {
					if($(this).html() == "") return true;
					if(badges[B.indexOf(index)] == 1) $(this).parent().append('<span class="badge badge-warning" style="position: absolute;margin-top: 2px;">1st</span>');
					if(badges[B.indexOf(index)] == 2) $(this).parent().append('<span class="badge badge-success" style="position: absolute;margin-top: 2px;">2nd</span>');
					if(badges[B.indexOf(index)] == 3) $(this).parent().append('<span class="badge badge-important" style="position: absolute;margin-top: 2px;">3rd</span>');
				});
				
			});	