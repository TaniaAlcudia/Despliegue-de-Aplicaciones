#! /bin/bash

### BEGIN INIT INFO
# Provides:          fw.sh
# Required-Start:    $all
# Required-Stop:     $all
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Firewall
# Description: Establece el firewall en este router
### END INIT INFO

#Activar enrutamiento
echo 1 > /proc/sys/net/ipv4/ip_forward

#Fuerza el vaciado de reglas del firewall iptables
iptables -F
iptables –t nat -F

#Enmascarar la salida a Internet desde la red interna
iptables -t nat -A POSTROUTING -s 10.130.6.1/24 -o enp0s3 -j MASQUERADE

