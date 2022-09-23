var here = document.getElementById("FullNamess");
here.addEventListener("change",function(){
    var al= here.value;
     show_data(al);
});
function show_data(data){
    let form = new FormData($("#form_dataa")[0]);
    var Phone= document.getElementById('Phone');
    let display_data = {
        
        "FullNamess": data,
        "action": "Salary_data",
        
    }
    //  document.getElementById('Phone');
    $.ajax({
        method:"POST",
        dataType: "JSON", 
        url:"API.php",
        data:display_data,
        success:function(response){
            let status = response.status;
            let res = response.data;
            if(status){
                document.getElementById('Phone').value = res[0].Phone;
            }
        }
    });
}