FROM alpine
RUN echo "#!/bin/bash
while true
do
  echo "Hello From Docker file: " + $(date)
done" > loop.sh
RUN chmod +x loop.sh
ENTRYPOINT [ "/loop.sh" ]
