#!/bin/sh

# checkoutTemplate_iOS.sh
#
# Created by rex on 2016/04/20.
# Copyright 2016 rex. All rights reserved.
#
# Update ios template

. $HOME/maps_nfs/.maps.config


PROJECT=NotifyTemplate
NOW="$(date +'%Y-%m-%d-%H-%M')"


mv "$HOME/maps/Tool/source_template" "$HOME/maps/Tool/source_template_backup"
cp -r "${MAPS_IOS_DIR}" "$HOME/maps/Tool/source_template"

result=$?

if [ ! ${result} -eq 0 ]; then
    echo "### update iOS template failed ###"
    mv "$HOME/maps/Tool/source_template_backup" "$HOME/maps/Tool/source_template"
else
    rm -rf "$HOME/maps/Tool/source_template_backup"
fi