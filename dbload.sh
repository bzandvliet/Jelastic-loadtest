!/bin/bash

ab -n 100 -c 100 http://<TARGETDB-ENV>.paas.hosted-by-previder.com/dbindex.php/
wait
ab -n 100 -c 100 http://<TARGETDB-ENV>.paas.hosted-by-previder.com/dbindex.php/
