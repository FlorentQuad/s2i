FROM php
RUN echo "<?php echo '<p>Hello World From Dockerfile</p>'; ?>" > index.phph
CMD [ "php", "./index.php" ]
