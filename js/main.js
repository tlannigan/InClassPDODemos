$(function(){
    // Spiner code for navbar-brand
    $('a.navbar-brand i').hover(
        function(){
            $(this).addClass('fa-spin');
        },
        
        function(){
            $(this).removeClass('fa-spin');
        }
    );
    
    var curDate = new Date();
    var curYear = curDate.getFullYear();
    $("#year").text(curYear);
    
    $('#tablesorted').DataTable({
        "columnDefs": [
            {"orderable": false, "targets": -1}  // Stop sorting on last column
        ],
        "lengthMenu":[ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]  // Drop down for how many entries
    });
});