#!/bin/sh
#
#    HyperVM, Server Virtualization GUI for OpenVZ and Xen
#
#    Copyright (C) 2000-2009     LxLabs
#    Copyright (C) 2009          LxCenter
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as
#    published by the Free Software Foundation, either version 3 of the
#    License, or (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.

program=$1
shift
if [ $program = 'kloxo' ] ; then
	db="kloxo4_2"
else 
	db="hypervm1_0"
fi

echo -n "Taking backup of the current databse...   "
/usr/local/lxlabs/ext/php/php ../bin/common/mebackup.php >/dev/null
echo "done.."

if [ -z $1 ] ; then
	echo need the secondary slave address
	exit;
fi
echo "Syncing database from $@ to this server"
ssh "$@" sh /usr/local/lxlabs/$program/bin/common/databasedump $program | mysql -u $program -p`cat /usr/local/lxlabs/$program/etc/conf/$program.pass` $db
echo "done"
