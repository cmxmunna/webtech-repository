function showTransection(str) 
{
    if (str == "") 
    {
      document.getElementById("TransactionResult").innerHTML = "No Input";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("TransactionResult").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../view/ajax_TransactionSearch.php?ajax_query="+str);
    xhttp.send();
}
// Internet package search by Farhan Naeem
function SortIpackByUserType(str) 
{
    if (str == "") 
    {
      document.getElementById("SortedResult").innerHTML = "No Input";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("SortedResult").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../internetpack_view/ajax_internetpackSearch.php?ajax_query="+str);
    xhttp.send();
}