INSTALLATIE:

1. Rol 2 PHP omgevingen uit via het Dashboard. Bij de omgeving vanaf waar je de loadtest uitvoerd (sourceomgeving) is het uitrollen van alleen een webserver voldoende. Bij de omgeving die getest wordt (targetomgeving) is het handing om ook een loadbalancer uit te voeren. 
2. Geef de webserver op de TARGETOMGEVING 1 gereserveerde cloudlet, met een schalingslimiet van 10 cloudlets.
3. Deploy deze repository op de SOURCEOMGEVING dmv een GIT-deployment in het Dashboard. 
4. Navigeer naar /var/www/webroot/ROOT op de webserver in de SOURCEOMGEVING en open portal.sh
5. Wijzig hier alle '<TARGET-ENV>' naar het dynamische stuk van de URL van de TARGETOMGEVING en sla de wijzigingen op.
6. Open een webbrowser en ga naar de URL van de SOURCEOMGEVING. 
7. Klik op 'Click me!'. De loadtest wordt nu uitgevoerd. Na ongeveer 30 tot 60 seconden wordt de verticale (en evt. horizontale) schaling in het Dashboard zichtbaar. Wanneer horizontaal schalen is ingesteld, wordt dit ook zichtbaar na ongeveer 1 minuut. 
