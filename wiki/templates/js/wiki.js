var cat_status=new Array();function show_wiki_cat_contents(c,e){var b=null;var d=null;var a=PATH_TO_ROOT+"/wiki/xmlhttprequest.php"+(e!=0?"?display_select_link=1&token="+TOKEN:"?token="+TOKEN);if(window.XMLHttpRequest){b=new XMLHttpRequest()}else{if(window.ActiveXObject){b=new ActiveXObject("Microsoft.XMLHTTP")}else{return}}if(c>0){if(cat_status[c]==undefined){d="id_cat="+c;b.open("POST",a,true);b.onreadystatechange=function(){if(b.readyState==4){document.getElementById("cat_"+c).innerHTML=b.responseText;document.getElementById("img_"+c).className="fa fa-folder-open";if(document.getElementById("img2_"+c)){document.getElementById("img2_"+c).className="fa fa-minus-square-o"}cat_status[c]=1}};b.setRequestHeader("Content-type","application/x-www-form-urlencoded");b.send(d)}else{if(cat_status[c]==0){document.getElementById("cat_"+c).style.display="block";document.getElementById("img_"+c).className="fa fa-folder-open";if(document.getElementById("img2_"+c)){document.getElementById("img2_"+c).className="fa fa-minus-square-o"}cat_status[c]=1}else{document.getElementById("cat_"+c).style.display="none";document.getElementById("img_"+c).className="fa fa-folder";if(document.getElementById("img2_"+c)){document.getElementById("img2_"+c).className="fa fa-plus-square-o"}cat_status[c]=0}}}}function select_cat(c){var b=null;var d=null;var a=PATH_TO_ROOT+"/wiki/xmlhttprequest.php?select_cat=1&token="+TOKEN;if(window.XMLHttpRequest){b=new XMLHttpRequest()}else{if(window.ActiveXObject){b=new ActiveXObject("Microsoft.XMLHTTP")}else{return}}if(c>=0&&c!=selected_cat){d="selected_cat="+c;b.open("POST",a,true);b.onreadystatechange=function(){if(b.readyState==4){document.getElementById("selected_cat").innerHTML=b.responseText;document.getElementById("id_cat").value=c;document.getElementById("class_"+c).className="selected";document.getElementById("class_"+selected_cat).className="";selected_cat=c}};b.setRequestHeader("Content-type","application/x-www-form-urlencoded");b.send(d)}}function insert_link(){var a=prompt(enter_text,title_link);if(a==""){alert(enter_text);return false}if(tinymce_editor){insertTinyMceContent("[link="+url_encode_rewrite(a)+"][/link]")}else{insertbbcode("[link="+url_encode_rewrite(a)+"]","[/link]","contents")}}function url_encode_rewrite(e){e=e.toLowerCase(e);var a=new Array(/ /g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g,/�/g);var c=new Array("-","e","e","e","a","a","u","u","u","i","i","o","c");var b=a.length;for(var d=0;d<b;d++){e=e.replace(a[d],c[d])}e=e.replace(/([^a-z0-9]|[\s])/g,"-");e=e.replace(/([-]{2,})/g,"-");return e.replace(/(^\s*)|(\s*$)/g,"").replace(/(^-)|(-$)/g,"")}function insert_paragraph(c){var a="-";if(c>5||c<1){return false}for(var b=1;b<=c;b++){a+="-"}insert_paragraph_title("paragraph",a,a,"contents")}function simple_insert_paragraph(g,d,b,e){var c=document.getElementById(e);var a=c.scrollTop;var f=prompt(enter_paragraph_name,title_paragraph);if(tinymce_editor){insertTinyMceContent("<br/>"+d+" "+f+" "+b+"<br/>")}else{if(b!=""&&f!=null&&f!=enter_paragraph_name){c.value+="\n"+d+" "+f+" "+b+"\n"}c.focus();c.scrollTop=a}return}function netscape_sel_paragraph(b,i,e,a){var d=i.textLength;var h=i.selectionStart;var g=i.selectionEnd;var k=i.scrollTop;if(g==1||g==2){g=d}var c=(i.value).substring(0,h);var l=(i.value).substring(h,g);var f=(i.value).substring(g,d);var j=l!=""?l:prompt(enter_paragraph_name,title_paragraph);if(tinymce_editor){insertTinyMceContent("<br/>"+e+" "+j+" "+a+"<br/>")}else{if(j!=null){if(a!=""&&l==""){i.value=c+"\n"+e+" "+j+" "+a+"\n"+f;i.setSelectionRange(c.length+(e.length+2),i.value.length-f.length-(a.length+2));i.focus()}else{i.value=c+"\n"+e+" "+l+" "+a+"\n"+f;i.setSelectionRange(c.length+(e.length+2),i.value.length-f.length-(a.length+2));i.focus()}}i.scrollTop=k}return}function ie_sel_paragraph(f,d,c,b){selText=false;var a=d.scrollTop;selection=document.selection.createRange().text;var e=selection!=""?selection:prompt(enter_paragraph_name,title_paragraph);if(tinymce_editor){insertTinyMceContent("<br/>"+c+" "+e+" "+b+"<br/>")}else{if(e!=null){if(b!=""&&selection==""){document.selection.createRange().text="\n"+c+" "+e+" "+b+"\n"}else{document.selection.createRange().text="\n"+c+" "+selection+" "+b+"\n"}}d.scrollTop=a;selText=""}return}function insert_paragraph_title(f,b,a,d){var c=document.getElementById(d);var e=navigator.appName;c.focus();if(e=="Microsoft Internet Explorer"){ie_sel_paragraph(f,c,b,a)}else{if(e=="Netscape"||e=="Opera"){netscape_sel_paragraph(f,c,b,a)}else{simple_insert_paragraph(f,b,a,d)}}return}function open_cat(c){var b=null;var d=null;var a=PATH_TO_ROOT+"/wiki/xmlhttprequest.php?select_cat=1&display_select_link=0"+(c==0?"&root=1":"")+"&token="+TOKEN;if(window.XMLHttpRequest){b=new XMLHttpRequest()}else{if(window.ActiveXObject){b=new ActiveXObject("Microsoft.XMLHTTP")}else{return}}if(c>=0&&c!=selected_cat){d="open_cat="+c;b.open("POST",a,true);b.onreadystatechange=function(){if(b.readyState==4){document.getElementById("cat_contents").innerHTML=b.responseText;document.getElementById("class_"+c).className="selected";document.getElementById("class_"+selected_cat).className="";selected_cat=c}};b.setRequestHeader("Content-type","application/x-www-form-urlencoded");b.send(d)}};