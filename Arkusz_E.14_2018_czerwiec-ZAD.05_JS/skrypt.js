function wesele() {
    let koszt=0;
    let goscie = document.getElementById('liczba_gosci').value;
    let poprawiny = document.getElementById('poprawiny').checked;
    let wynik = document.getElementById('wynik');
  
    if (poprawiny){
        koszt=(goscie*100)+(0.30*(goscie*100));
    } else {
        koszt=goscie*100;
    }
    wynik.innerHTML='Koszt Twojego wesela to ' +koszt+' złotych';
};