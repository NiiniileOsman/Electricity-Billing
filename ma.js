var Named = document.getElementById("FullNames");
Named.addEventListener("change",function(){
    var al= Named.value;
      show_data(al);
});
function show_data(data){
    let form = new FormData($("#forms_data")[0]);
    var Phone= document.getElementById('Phone');
    var TotalKillowat= document.getElementById('TotalKillowat');   
    var TotalAmount= document.getElementById('TotalAmount');   
    let display_data = {
        
        "FullNames": data,
        "action": "Invoice_data",        
    }
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
                document.getElementById('TotalKillowat').value = res[0].TotalKillowat;               
                document.getElementById('TotalAmount').value = res[0].TotalAmount;               
            }
        }
    });
}