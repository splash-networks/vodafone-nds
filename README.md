# Vodafone NDS Portal on Raspberry Pi

### Raspberry Pi Image Configuration

Use `Raspberry Pi Imager` to setup `RASPBERRY PI OS LITE (64-BIT)` OS on the Pi. Be sure to go to advanced options to enable SSH and setup an SSH password.

### Access Point Setup

Access Raspbeery Pi via SSH and install RaspAP package to configure Raspberry Pi as a WiFi access point and setup DHCP. Follow the instructions given [here](https://docs.raspap.com/). Test the access point by connecting to it and checking internet access. RaspAP's web interface can be used to change WiFi SSID or password.

### NoDogSplash Setup

NoDogSplash (NDS) will be used to setup captive portal on the Raspberry Pi. Follow the instructions given [here](https://docs.raspap.com/captive/) to set it up. Test the portal at this point before proceeding with the next steps.

### NDS Customization

Edit the configuration file

```
nano /etc/nodogsplash/nodogsplash.conf
```

Add the following line in `FirewallRuleSet preauthenticated-users` section:

```
FirewallRule allow tcp port 80 to 10.3.141.1
```

Save and exit.

### NDS Code Update

Backup the default NDS code:

```
cd /etc/nodogsplash
mv htdocs htdocs.bk
```

Download and setup our custom captive portal code (in `/etc/nodogsplash` directory):

```
git clone https://github.com/splash-networks/vodafone-nds.git
mv vodafone-nds htdocs
```

Restart NDS service:

```
systemctl restart nodogsplash.service
```

### Lighttpd vhost Setup

Navigate to Lighttpd vhost directory and create a new vhost:

```
cd /etc/lighttpd/conf-enabled
nano 60-vodafone-nds.conf
```

Add the following contents to the file:

```
$HTTP["host"] =~ "(^|.)10.3.141.1$" {
    server.document-root = "/var/www/vodafone-nds/"
    server.errorlog = "/var/log/lighttpd/vodafone-nds-error.log"
}
```

Setup server-side code:

```
cd /var/www
git clone -b server https://github.com/splash-networks/vodafone-nds.git
cd vodafone-nds
chmod 666 database.txt
```

Restart Lighttpd service:

```
systemctl restart lighttpd
```

Any survey data entered by users will be saved to `/var/www/vodafone-nds/database.txt`
