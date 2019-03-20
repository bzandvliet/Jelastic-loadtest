!/bin/bash

ab -n 100 -c 100 http://<TARGETDB-ENV>.paas.hosted-by-previder.com/
wait
ab -n 100 -c 100 http://<TARGETDB-ENV>.paas.hosted-by-previder.com/