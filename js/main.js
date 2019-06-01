$( "#click" ).on( "click", function() {

    let checkValue = $("input[name='check']:checked").val();

    let radioValue = $("input[name='rad']:checked").val();

    let selectValue = $("#select").children("option:selected").val();

    if(checkValue && radioValue && selectValue ){
                alert("Radio : " + radioValue+
                      "\nCeckbox : "+checkValue+
                      "\nselect : " + selectValue);
            }

});