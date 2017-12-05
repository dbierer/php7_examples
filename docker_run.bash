#!/bin/bash
cd docs/docker
gnome-terminal -e ./run-5.6.bash
gnome-terminal -e ./run-7.0.bash
gnome-terminal -e ./run-7.1.bash
gnome-terminal -e ./run-7.2.bash
cd
echo -e "***********************************************"
echo -e "PHP 5.6 is running on port 5656\nPHP 7.0 is running on port 7070\nPHP 7.1 is running on port 7171\nPHP 7.2 is running on port 7272\n"
echo -e "To stop the Docker containers, just type 'exit'"
echo -e "and press enter in each terminal window."
echo -e "***********************************************"
exit 0