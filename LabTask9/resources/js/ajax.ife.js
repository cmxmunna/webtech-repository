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