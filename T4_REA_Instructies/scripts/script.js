function showAnswer(nmbr ,test)
{
    //this.style.display = "none";
    console.log(test.id);
    document.getElementById(test.id).style.display = "none";
    document.getElementById(nmbr).style.display = "block";
}