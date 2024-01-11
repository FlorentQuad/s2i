FROM fedora
RUN echo $'#!/bin/bash\n\ 
while true\n\
do\n\ 
	echo "Hello From Docker file: "$(date)\n\ 
	sleep 1\n\
done\n\ ' > loop.sh
RUN chmod +x /loop.sh
CMD [ "/loop.sh" ]
