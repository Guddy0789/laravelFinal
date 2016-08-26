$(document).ready(function(){
	loadData();
});

function loadData(){
  var title1 = $("#title1")
  var noticia1 = $("#noticia1");
  //  alert(document.getElementById ( "noticia1" ).innerText);


	var route = "http://news.dev.com/news";//definir nueva ruta
	noticia1.empty();
  title1.empty();
// alert(noticia1);
	$.get(route,function(res){
		$(res).each(function(key,value){

			  var length = 10;
		    var truncateTitle = value.title;
		    var truncateText = value.text;

	        var truncatedTitle = truncateTitle.substring(0,length)+"...";
	        var truncatedText = truncateText.substring(0,length)+"...";
alert(value.title);
      title1.append(value.title);
      noticia1.append(value.text);
      break;
		});
	});
}
