FROM php
RUN echo "<?php echo '<p>Hello World From Dockerfile</p>'; ?>" > index.php
CMD [ "php", "./index.php" ]
