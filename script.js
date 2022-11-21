$(document).ready(function(){
    // labels of drop message form in contact page 
    $('#profileUpdate').hide();
    $('#profileCreate').hide();
    $('#upperRightBkAdminInnerUpdate').hide();
    $('#upperRightBkAdminInnerCreate').show();
    $('#upperLeftBkAdminInnerUpdate').hide();
    $('#returningSection').hide();
    $('#returningRecords').hide();
})

$('#createProfileBtn').click(function(){
    if($('#profileUpdate').show()){
        $('#profileUpdate').hide();
        $('#profileCreate').show();
    } else {
        $('#profileCreate').show();
    }
})

$('#updateProfileBtn').click(function(){
    if($('#profileCreate').show()){
        $('#profileUpdate').show();
        $('#profileCreate').hide();
    } else {
        $('#profileUpdate').show();
    }    
})

$('#enterBkBtn').click(function(){
    $('#upperRightBkAdminInnerUpdate').hide();
    $('#upperLeftBkAdminInnerUpdate').hide();
    $('#upperRightBkAdminInnerCreate').show();
})

$('#editBkBtn').click(function(){

    $('#upperRightBkAdminInnerCreate').hide();
    $('#upperRightBkAdminInnerUpdate').show();
    $('#upperLeftBkAdminInnerUpdate').show();
})

$('#borrowBkBtn').click(function(){

    $('#returningSection').hide();
    $('#returningRecords').hide();
    $('#borrowingSection').show();
    $('#borrowingRecords').show();
    $('#reservedBooks').show();
    $('#pageHeaderBorrowAdmin').text('Borrowing');
})

$('#returnBkBtn').click(function(){

    $('#returningSection').show();
    $('#returningRecords').show();
    $('#borrowingSection').hide();
    $('#borrowingRecords').hide();
    $('#reservedBooks').hide();
    $('#pageHeaderBorrowAdmin').text('Returning');
})