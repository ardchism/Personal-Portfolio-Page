var count = 4;
// HTML toggle
var htmltag = false;
$("#HTML").click(changeAttributehtml);
function changeAttributehtml(){
	if(htmltag == false){
		count -= 1;
		$("#HTML").css("backgroundColor", "#EEEDEF");
		$("#htmlwindow").css("display", "none");
		$(".window").css("width", "" + (100/count - .2) + "%");
		htmltag = true;
	}
	else{
		count += 1;
		$("#HTML").css("backgroundColor", "darkgrey");
		$("#htmlwindow").css("display", "initial");
		$(".window").css("width", "" + (100/count - .2) + "%");
		htmltag = false;
	}
}

// CSS toggle
var csstag = false;
$("#CSS").click(changeAttributecss);
function changeAttributecss(){
	if(csstag == false){
		count--;
		$("#CSS").css("backgroundColor", "#EEEDEF");
		$("#csswindow").css("display", "none");
		$(".window").css("width", "" + (100/count - .2) + "%");
		csstag = true;
	}
	else{
		count++;
		$("#CSS").css("backgroundColor", "darkgrey");
		$("#csswindow").css("display", "initial");
		$(".window").css("width", "" + (100/count - .2) + "%");
		csstag = false;
	}
}

// JS toggle
var jstag = false;
$("#JAVA").click(changeAttributejs);
function changeAttributejs(){
	if(jstag == false){
		count--;
		$("#JAVA").css("backgroundColor", "#EEEDEF");
		$("#jswindow").css("display", "none");
		$(".window").css("width", "" + (100/count - .2) + "%");
		jstag = true;
	}
	else{
		count++;
		$("#JAVA").css("backgroundColor", "darkgrey");
		$("#jswindow").css("display", "initial");
		$(".window").css("width", "" + (100/count - .2) + "%");
		jstag = false;
	}
}

// RESULT toggle
var resulttag = false;
$("#result").click(changeAttributeResult);
function changeAttributeResult(){
	if(resulttag == false){
		count--;
		$("#result").css("backgroundColor", "#EEEDEF");
		$("#resultwindow").css("display", "none");
		$(".window").css("width", "" + (100/count - .2) + "%");
		resulttag = true;
	}
	else{
		count++;
		$("#result").css("backgroundColor", "darkgrey");
		$("#resultwindow").css("display", "initial");
		$(".window").css("width", "" + (100/count - .2) + "%");
		resulttag = false;
	}
}

// run button click
$("#run").click(function(){
	
	$("iframe").contents().find("html").html('<style>' + $("#CSStext").val() + '</style>' + $("#HTMLtext").val());
	
	document.getElementById("resultsFrame").contentWindow.eval($("#JStext").val());
	
});

