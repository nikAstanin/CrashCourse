#!/bin/bash

echo "Please, write down your comment for commit"
read comment

#if [ ! -f "arch.tar.gz" ]
#	then echo "File doesn't exist"
#else
#	echo "File exist"
#	rm arch.tar.gz
#fi

#tar -cvf arch.tar.gz *
#echo "New arch was created"
curDate=$(date +"%H:%M %d/%m/%Y")
git add --all
git commit -m "$comment | $curDate"
git push origin master
echo "$comment | $curDate"
