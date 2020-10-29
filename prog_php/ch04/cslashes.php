<?php

    echo addcslashes("hello\tworld\n", "\x00..\x1fz..\xff");