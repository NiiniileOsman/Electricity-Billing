

var here = document.getElementById("totalId");
here.addEventListener("change",function(){
    var al= here.value;
    
    show_data(al);
});



function show_data(data){

    let form = new FormData($("#form_data")[0]);
    var Name= document.getElementById('Id');
    var Name= document.getElementById('Name');
    var Phone= document.getElementById('Phone');
    var Gender= document.getElementById('Gender');
    var Passport= document.getElementById('Passport');
    var VisaType= document.getElementById('VisaType');
    var Country= document.getElementById('Country');
    var Remained= document.getElementById('Remained');
    var Charge= document.getElementById('Charge');
   
    let display_data = {
        
        "totalId": data,
        "action": "read_data",
        
    }

    // document.getElementById('Phone');
    $.ajax({
        method:"POST",
        dataType: "JSON",
        url:"API.php",
        data:display_data,
        success:function(response){
            let status = response.status;
            let res = response.data;

            if(status){
                
                // document.getElementById('Id').value = res[0].ID;
                document.getElementById('Id').value = res[0].ID;
                document.getElementById('Name').value = res[0].Name;
                document.getElementById('Phone').value = res[0].Mobile;
                document.getElementById('Gender').value = res[0].Gender;
                document.getElementById('Passport').value = res[0].Passport;
                document.getElementById('VisaType').value = res[0].VisaType;
                document.getElementById('Country').value = res[0].Country;
                document.getElementById('Charge').value = res[0].Advance;
                document.getElementById('Remained').value = res[0].Cost;
               
            }
        }
    });


}

// totalvisa,TotalCargo,TotalSUPaid,TotalSPaid