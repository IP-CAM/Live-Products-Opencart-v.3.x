#  * Live Products v1.0.
#  *
#  * The Live Products extension is for CMS Opencart 3.x.
#  * The main extension features is displaying an extra info about products and options
#  * and dynamically updating product price, tax etc on the product page based on selected
#  * options and quantities.
#  *
#  *
#  * @author		Andrii Burkatskyi aka underr underr.ua@gmail.com
#  * @copyright	Copyright (c) 2019 Andrii Burkatskyi
#  * @license		https://raw.githubusercontent.com/underr-ua/ocmod3-live-products/master/EULA.txt End-User License Agreement
#  *
#  * @version		1.4
#  *
#  * @see			https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460
#  * @see			https://underr.space/notes/projects/project-014.html
#  * @see			https://github.com/underr-ua/ocmod3-live-products

zip=$(shell basename `pwd`).ocmod.zip

eula=EULA.txt
readme=README.md
datetime=201801010000.00
src=src
bin=bin


all: checkg clean makedir timestamp makezip hideg

checkg:
	@if [ ! -f "hideg.pwd" ]; then hideg; fi

makedir:
	mkdir -p "$(bin)"

timestamp:
	find . -exec touch -a -m -t $(datetime) {} \;

makezip:
	cd "$(src)" && zip -9qrX "../$(bin)/$(zip)" * && cd .. && zip -9qrX "$(bin)/$(zip)" "$(readme)" "$(eula)"

hideg: hideg.pwd
	hideg "$(bin)/$(zip)"

clean:
	@echo Cleaning...
	@rm -f "$(bin)"/*.*
	@rm -f "$(src)"/*.zip
	@rm -f "$(src)/$(eula)"
	@rm -f "$(src)/$(readme)"
