function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
  }
function navigate(){
    window.location.href="quiz.html";
}
(document).ready(function() {
  $('#myTable').DataTable({
      "pageLength": 10, // Default number of rows per page
      "lengthMenu": [10, 15, 20, 25], // Dropdown for selecting rows per page
      "pagingType": "full_numbers", // Pagination style
      "responsive": true // Make table responsive
  });
});

