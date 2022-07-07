function fillClubs(dest,id){
    $.ajax({
        url:"AJAX/AJAXGetClubs.php",
        type:"post",
        data:{
            clubId:id
        },
        success(result){
            $('#'+dest).html(result);
        }
    })
}