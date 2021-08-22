clean:
	rm -rf build

update:
	ppm --generate-package="src/SvgLib"

build:
	mkdir build
	ppm --no-intro --compile="src/SvgLib" --directory="build"

install:
	ppm --no-prompt --fix-conflict --install="build/net.intellivoid.svglib.ppm"