# Camera
HTML Javascript upload jpeg image to php server script from any attached camera

For several years the <a href='https://benlo.com/cottagecam/archive.php?cam=Turtle'>Turtle Cam</a> has been uploading images of Turtle Rock once a minute.

The images are taken by a <a href='https://tinyscope-club.com/products/dwarf-telescope'>DWARF telescope</a> USB camera.

The javascript/html uploader has been reliably operating on a Chromebook unattended for months at a time. It will work in any Chrome browser on any platform using any camera visible to the system camera interface. On notebooks the internal cameras and virtual cameras such as OBS are visible. On phones and tablets, the internal and some external cameras are usable.

The browser permissions must be set to allow camera access, of course.

In the camera.html file, set the name of the camera. If no name is chosen, the first camera in the list will be used.

Modify the upload target to your server and install upload.php on it. Change your jpg file saving to suit.


