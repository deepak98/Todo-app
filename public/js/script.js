
function validate() {
	var flag=true;
    var title = document.forms["add_todo"]["title"].value;
    var content=document.forms["add_todo"]["content"].value;
    
    
    if (title == null || title == "") {
        document.getElementById('title').innerHTML="      Enter Task!!!";
        flag=false;
    }
    else{
    	document.getElementById('title').innerHTML="";
    }
    if (content == null || content == "") {
        document.getElementById('content').innerHTML="      Enter Description";
        
        flag=false;
    }
    else{
    	document.getElementById('content').innerHTML="";
    }

    return flag;
}


