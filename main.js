var here = document.getElementById("FullName");
here.addEventListener("change",function(){
    var al= here.value;
     show_data(al);
});
function show_data(data){
    let form = new FormData($("#form_data")[0]);
    var Phone= document.getElementById('Phone');
    var Address= document.getElementById('Address');   
    let display_data = {
        
        "FullName": data,
        "action": "read_data",
        
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
                document.getElementById('Address').value = res[0].Address;               
            }
        }
    });
}

// var Named = document.getElementById("FullNames");
// Named.addEventListener("change",function(){
//     var al= Named.value;

//      alert('hjgjgjg');
//     //  show_data(al);
// });


// var Named = document.getElementById("FullNamess");
// Named.addEventListener("change",function(){
//     var al= Named.value;

//      alert('hjgjgjg');
//     //  show_data(al);
// });

