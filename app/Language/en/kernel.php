<?php
// English dict file for kernel
return [
	"title"					=> "Kernel",
	"desc"					=> "Matteo Salonia's custom Kernel.",
	"welcome"				=> [
		"title"				=> "Kernel",
		"desc"				=> "This page contains all the details necessary to use my script to configure the Linux Kernel, optimizing it to maximize the hardware's performance, and be as light as possible.",
	],
	"go-to"					=> [
		"title"				=> "Go to:",
		"intro"				=> "Introduction",
		"setup"				=> "Setup",
		"extra"				=> "Extra",
	],
	"intro"					=> [
		"desc"				=> "This project was realized and is maintained to be a useful tool, in order to help me configure the Kernel as I please, allowing me to also apply patches in order to make it more efficient and performant, optimizing it for the available hardware, in the slightest detail.",
		"setup"				=> [
			"desc"			=> "My setups are based on a system comprised of the following components:",
			"distro"		=> [
				"name"		=> "Distro",
				"value"		=> "Gentoo Linux",
			],
			"kcompr"		=> [
				"name"		=> "Kernel Compression",
				"value"		=> "LZ4 for the initramfs, zstd for modules",
			],
			"initramfs"		=> [
				"name"		=> "Initramfs",
				"value"		=> "Dracut",
			],
			"bootld"		=> [
				"name"		=> "Bootloader",
				"value"		=> "GRUB",
			],
			"init"			=> [
				"name"		=> "Init",
				"value"		=> "OpenRC",
			],
			"fs"			=> [
				"name"		=> "Filesystem",
				"fat32"		=> "FAT32 for the <a class='link u u-LR' href='https://en.wikipedia.org/wiki/EFI_system_partition'>ESP</a>",
				"xfs"		=> "XFS for the <a class='link u u-LR' href='https://www.kernel.org/doc/html/latest/filesystems/ramfs-rootfs-initramfs.html#what-is-rootfs'>rootfs</a>",
				"ext4"		=> "ext4 for various things",
			],
			"logind"		=> [
				"name"		=> "Logind",
				"value"		=> "elogind",
			],
		],
		"note"				=> "<b>Note</b>: since I use <b>Gentoo</b>, the package names may vary from your distro's (Arch, Debian, Fedora, ...) packages. Please verify whether the names may vary, and take note of them.",
		"configs"			=> [
			"desc"			=> "There are two default configs:",
			"config"		=> "for my <b>ThinkPad T440p</b>, with CPU <b>i7-4700MQ</b>, no GPU (iGPU), <b>8GB RAM</b>, SSD M.2 2242 + SSD SATAIII.",
			"config-pc"		=> "for my desktop PC, with CPU <b>i5-11400MQ</b>, no GPU (iGPU), <b>16GB RAM</b>, SSD NVME Samsung 980 Pro</b>.",
			"subd"			=> "Since the changes made to the Kernel config, it'll be necessary to verify the desired components are enabled in the Kernel, whenever you'd choose my config as a starting point. For example, components relative to AMD, Nvidia, NUMA, etc. have been disabled.<br>If you don't know where to start, use an already existing config that you know works on your hardware, if available, or else use any Kernel's default config, like that provided by your distro, or the Kernel's very own default config.",
		],
	],
	"setup"					=> [
		"desc"				=> "Make sure to have all the tools necessary to proceed. Verify you have <code>git</code>, <code>gcc</code>, <code>make</code>, etc. Tipically, most compilation tools are provided by packages like <code>base-devel</code>. I suggest you also verify the presence of <code>linux-firmware</code>, in order to have the necessary firmware for any <a class='link u u-LR' href='https://www.gnu.org/philosophy/free-hardware-designs.html'>nonfree</a> hardware. Don't forget to download the <a class='link u u-LR' href='https://wiki.gentoo.org/wiki/Microcode'>microcode</a> that is most appropriate, whether it be Intel, AMD, or any other. Finally, make sure you have <code>lz4</code> and <code>zstd</code>, in order to compress various Kernel components.",
		"s1"				=> [
			"title"			=> "1. Get the repository",
			"desc"			=> "We'll use the <code>/usr/src/usr-kernel</code> directory in order to save this project. Make sure you have read and write permissions, in order to create the directory.",
			"note"			=> "Whenever the chosen directory differs from the default, don't forget to modify the <code>CUSTDIR</code> variable in <code>build.sh</code>",
		],
		"s2"				=> [
			"title"			=> "2. Version selection",
			"desc"			=> "Once you get the repository, choose an available version. To see which version is available, you just need to list the directory contents with <code>ls</code>. In this example, we'll use Linux <code>6.8.2-gentoo</code>.",
			"note"			=> "<u>Your Kernel will definitely have a different version.</u><br>Don't panic: you just need to copy the folder, and rename it according to your version. For example, if your version would be <code>6.8.3-zen</code>, you just need to execute: <code>cp -r 6.8.2-gentoo 6.8.3-zen</code>. <br> Don't forget to modify the <code>KVER</code> variable whenever the primary version differs (e.g.: <code>6.8.2</code> -> <code>6.8.3</code>), and <code>PVER</code> whenever the secondary/custom version differs (e.g.: <code>gentoo</code> -> <code>zen</code>)",
		],
		"s3"				=> [
			"title"			=> "3. Modify the script",
			"desc"			=> "Now, we need to verify the contents of <code>build.sh</code>. Modify the file with any text editor, and note the following variables:",
			"archver"		=> "CPU architecture code, to optimize the Kernel. Here is the full list of codes:",
			"configfile"	=> "config file name, that will be copied from the directory to the Kernel.",
			"jobs"			=> "how many threads to use for the compilation. I recommend setting the number of cores.",
			"kver"			=> "primary Kernel version.",
			"pver"			=> "secondary/custom Kernel version.",
			"kernver"		=> "full Kernel version, <u>do not modify</u>.",
			"custdir"		=> "this project's directory, modify whenever it differs from the defaults.",
			"cleardir"		=> "Clear Linux directory name, <u>do not modify</u>.",
			"patchdir"		=> "patch directory name, <u>do not modify</u>.",
			"v4l2dir"		=> "V4L2loopback directory name, <u>do not modify</u>.",
			"cfodir"		=> "Kernel Compiler Patch directory name, <u>do not modify</u>.",
			"usrdir"		=> "chosen Kernel version directory name, <u>do not modify</u>.",
			"kerneldir"		=> "set this variable whenever the Kernel directory differs from <code>/usr/src</code>.",
		],
		"s4"				=> [
			"title"			=> "4. Flag selection",
			"desc"			=> "After modifying <code>build.sh</code>, we have to set the correct parameters in order to decide what to do.<br>Here's a table with all the parameters (flags).",
			"table"			=> [
				"sflag"		=> "Short flag",
				"lflag"		=> "Long flag",
				"desc"		=> "Description",
				"b"			=> "Skip Kernel compilation.",
				"c"			=> "Do not copy the Kernel config file (<code>config</code>).",
				"d"			=> "Use <a class='link u u-LR' href='https://www.distcc.org'>distcc</a> to speed up Kernel compilation",
				"e"			=> "Use <a class='link u u-LR' href='https://ccache.dev'>ccache</a> to speed up Kernel compilation",
				"f"			=> "Compile the Kernel with unsafe fast math options.",
				"h"			=> "Show the help menu and exit.",
				"l"			=> "Apply Clear Linux patches.",
				"m"			=> "Execute <code>make menuconfig</code> in the Kernel directory and exit without compiling.",
				"o"			=> "Compile the Kernel with CPU family optimizations.",
				"p"			=> "Apply user patches.",
				"v"			=> "Compile the <a class='link u u-LR' href='https://github.com/umlaeute/v4l2loopback'>v4l2loopback</a> module.",
			],
		],
		"s5"				=> [
			"title"			=> "5. Kernel configuration",
			"desc"			=> "Tipically, it'll be necessary to configure the Kernel, starting from a config file. To do so, you need to run the following as root:",
			"cmd1"			=> [
				"desc"		=> "This will allow us to:",
				"l"			=> "Apply Clear Linux patches",
				"m"			=> "Configure the Kernel, starting from an existing config, or load a custom config file",
				"o"			=> "Apply the CPU family optimization patches",
				"p"			=> "Apply user patches",
			],
			"desc2"			=> "Once the Kernel config process is done, the new config file will be available as <code>/usr/src/linux/.config</code> (or under <code>\$KERNELDIR/.config</code> whenever <code>KERNELDIR</code> would've been set).",
			"desc3"			=> "Now we need to copy <code>.config</code> from the Kernel directory to the current directory, to then compare the two files and see any changes.",
			"cmd2"			=> "The last command above executes the <code>diff</code> command, showing the differences between our starting <code>config</code> file, and the new <code>config.new</code> file, to then show everything with the Vim editor. Obviously, it's necessary to modify the name of the <code>config</code> file in the command above whenever appropriate.",
			"desc4"			=> "After verifying the differences, let's replace our config file with the <code>config.new</code> file, and move on to the actual Kernel compilation.",
		],
		"s6"				=> [
			"title"			=> "6. Kernel compilation",
			"desc"			=> "After making sure we have everything that's necessary, we can proceed with compiling the Kernel with the following command, executing it as root:",
			"cmd"			=> "Note the repeated presence of the patch options (<code>-l</code>, <code>-o</code>, <code>-p</code>). This is because the script automatically reverts all changes made by the patches present in the Kernel directory, where possible, and removes said patches. I programmed the script this way because I often have to revert and remove various patches, especially after multiple compilations.",
			"note"			=> "Note that the script will show any compilation error, as well as showing the true compilation time, not considering patches and so on.",
			"desc2"			=> "Once the script finishes its execution, it'll install the Kernel, automatially executing <code>dracut</code> to generate the initramfs, and it'll update <code>grub</code>, thanks to <code>installkernel</code>, which most distros tipically have. If your setup does not use dracut nor grub, check your <code>installkernel</code> config, it'll be set up to use whatever you're currently using.",
		],
	],
	"extra"					=> [
		"desc"				=> "This section specifies any extra steps to take after Kernel compilation, that do not depend on the script. Using the script, it won't be necessary to execute <code>dracut</code> nor <code>grub</code> manually, because they'll be automatically executed.",
		"v4l2"				=> [
			"title"			=> "V4L2loopback",
			"desc"			=> "The script will automatically install this module for the compiled Kernel version. The only step you need to take is add the module settings, because the script does not check whether they exist or not.",
			"desc2"			=> "Modify <code>/etc/modprobe.d/v4l2loopback.conf</code>, and add the following:",
			"cmd"			=> "Here you can modify <code>card_label</code> to set the device name, whenever necessary, for example if you want to hide the fact this is a virtual device, or if you simply would like a better name.",
		],
		"initramfs"			=> [
			"title"			=> "Initramfs",
			"desc"			=> "To run the Kernel an initramfs is necessary. To generate it, I'll use dracut.",
			"desc2"			=> "First of all, make sure you configured dracut. For example, here's my <code>/etc/dracut.conf</code>:",
			"desc3"			=> "It's sufficient to execute the following command as root:",
			"cmd1"			=> "Replace <code>6.8.2-gentoo</code> whenever the Kernel version is different. Be careful to the <code>-f</code> flag, that forces the initramfs regeneration, even if it already exists for the chosen Kernel.",
			"cmd2"			=> "The initramfs will be available under <code>/boot</code>, together with the previously compiled Kernel's files.",
		],
		"bootloader"		=> [
			"title"			=> "Bootloader",
			"desc"			=> "To boot our new Kernel, we need to configure the bootloader. <u>In this section, I'll only talk about GRUB2.</u>",
			"desc2"			=> "Most users, at this point, will surely already have a working system, and a configured bootloader. This fact allows us to just update the bootloader config, without modifying any other files.",
			"desc3"			=> "So, you just need to run as root:",
			"cmd"			=> "This command will tell us the available Kernels (and any other OS), that will be available once we reboot our system, in addition to telling us which microcode(s) were found.",
		],
	],
];
