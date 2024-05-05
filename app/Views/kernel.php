<?php
	$opts = [
		"title" => lang("kernel.title"),
		"desc"	=> lang("kernel.desc"),
		"url"	=> base_url("kernel"),
	];

	echo view("static/head", $opts);
?>

<body>
<?= $this->include("static/header") ?>

<!-- Kernel -->
<div class="hero u-text-center u-shadow-inset pt-3">
<div class="hero-body">
<div class="content w-90p">
	<h2 class="headline-4 text-gray-900">
		<?= lang('kernel.welcome.title') ?>
	</h2>

	<p class="lead">
		<?= lang('kernel.welcome.desc') ?>
	</p>

	<p>
	<?= lang('kernel.go-to.title') ?><br>
	<a class="tag bg-blue-700 text-white" href="#intro">
		<?= lang('kernel.go-to.intro') ?>
	</a>

	<span> </span>

	<a class="tag bg-blue-700 text-white" href="#setup">
		<?= lang('kernel.go-to.setup') ?>
	</a>

	<span> </span>

	<a class="tag bg-blue-700 text-white" href="#extra">
		<?= lang('kernel.go-to.extra') ?>
	</a>
	</p>

	<div class="content u-text-left">
	<div class="card">
	<div class="m-3">
		<!-- Intro -->
		<h3 class="tag tag--xl bg-blue-700 my-0" id="intro">
			<a class="text-white" href="#intro">
				<?= lang('kernel.go-to.intro') ?>
			</a>
		</h3>

		<p>
			<?= lang('kernel.intro.setup.desc') ?>
		</p>

		<p>

		<ul>
			<li>
				<b><?= lang('kernel.intro.setup.distro.name') ?></b>:
				&thinsp;
				<a class="link u u-LR" href="https://gentoo.org">
					<?= lang('kernel.intro.setup.distro.value') ?>
				</a>
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.kcompr.name') ?></b>:
				<?= lang('kernel.intro.setup.kcompr.value') ?>
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.initramfs.name') ?></b>:
				&thinsp;
				<a class="link u u-LR" href="https://github.com/dracutdevs/dracut">
					<?= lang('kernel.intro.setup.initramfs.value') ?>
				</a>
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.bootld.name') ?></b>:
				&thinsp;
				<a class="link u u-LR" href="https://www.gnu.org/software/grub">
					<?= lang('kernel.intro.setup.bootld.value') ?>
				</a>
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.init.name') ?></b>:
				&thinsp;
				<a class="link u u-LR" href="https://github.com/OpenRC/openrc">
					<?= lang('kernel.intro.setup.init.value') ?>
				</a>
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.fs.name') ?></b>:
				<?= lang('kernel.intro.setup.fs.fat32') ?>,
				<?= lang('kernel.intro.setup.fs.xfs') ?>,
				<?= lang('kernel.intro.setup.fs.ext4') ?>.
			</li>

			<li>
				<b><?= lang('kernel.intro.setup.logind.name') ?></b>:
				&thinsp;
				<a class="link u u-LR" href="https://wiki.gentoo.org/wiki/Elogind">
					<?= lang('kernel.intro.setup.logind.value') ?>
				</a>
			</li>
		</ul>
		</p>

		<div class="card bg-warning">
			<p class="m-3">
				<?= lang('kernel.intro.note') ?>
			</p>
		</div>

		<p>
		<?=lang('kernel.intro.configs.desc') ?>

		<ol>
			<li>
				<code>config</code>:
				<?= lang('kernel.intro.configs.config') ?>
			</li>

			<li>
				<code>config.pc</code>:
				<?= lang('kernel.intro.configs.config-pc') ?>
			</li>
		</ol>
		</p>

		<p>
			<?= lang('kernel.intro.configs.subd') ?>
		</p>
	</div>
	</div>

	<div class="card">
	<div class="m-3">
		<h3 class="tag tag--xl bg-blue-700 my-0" id="setup">
			<a class="text-white" href="#setup">
				<?= lang('kernel.go-to.setup') ?>
			</a>
		</h3>

		<p>
			<?= lang('kernel.setup.desc') ?>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s1">
			<a class="text-white" href="#s1">
				<?= lang('kernel.setup.s1.title') ?>
			</a>
		</h4>

		<p>
			<?= lang('kernel.setup.s1.desc') ?>
		</p>

		<pre><code>git clone --recurse-submodules "https://github.com/saloniamatteo/kernel" /usr/src/usr-kernel<br>
cd /usr/src/usr-kernel</code></pre>

		<br>

		<div class="card bg-info text-white">
			<p class="m-3">
				<?= lang('kernel.setup.s1.note') ?>
			</p>
		</div>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s2">
			<a class="text-white" href="#s2">
				<?= lang('kernel.setup.s2.title') ?>
			</a>
		</h4>

		<p>
			<?= lang('kernel.setup.s2.desc') ?>
		</p>

		<div class="card bg-info text-white">
			<p class="m-3">
				<?= lang('kernel.setup.s2.note') ?>
			</p>
		</div>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s3">
			<a class="text-white" href="#s3">
				<?= lang('kernel.setup.s3.title') ?>
			</a>
		</h4>

		<p>
		<?= lang('kernel.setup.s3.desc') ?>

		<ul>
			<li>
				<code>ARCHVER</code>: <?= lang('kernel.setup.s3.archver') ?>
				<pre class="my-2"><code>
 1. AMD Opteron/Athlon64/Hammer/K8 (MK8)<br>
 2. AMD Opteron/Athlon64/Hammer/K8 with SSE3 (MK8SSE3)<br>
 3. AMD 61xx/7x50/PhenomX3/X4/II/K10 (MK10)<br>
 4. AMD Barcelona (MBARCELONA)<br>
 5. AMD Bobcat (MBOBCAT)<br>
 6. AMD Jaguar (MJAGUAR)<br>
 7. AMD Bulldozer (MBULLDOZER)<br>
 8. AMD Piledriver (MPILEDRIVER)<br>
 9. AMD Steamroller (MSTEAMROLLER)<br>
10. AMD Excavator (MEXCAVATOR)<br>
11. AMD Zen (MZEN)<br>
12. AMD Zen 2 (MZEN2)<br>
13. AMD Zen 3 (MZEN3)<br>
14. AMD Zen 4 (MZEN4)<br>
15. Intel P4 / older Netburst based Xeon (MPSC)<br>
16. Intel Core 2 (MCORE2)<br>
17. Intel Atom (MATOM)<br>
18. Intel Nehalem (MNEHALEM)<br>
19. Intel Westmere (MWESTMERE)<br>
20. Intel Silvermont (MSILVERMONT)<br>
21. Intel Goldmont (MGOLDMONT)<br>
22. Intel Goldmont Plus (MGOLDMONTPLUS)<br>
23. Intel Sandy Bridge (MSANDYBRIDGE)<br>
24. Intel Ivy Bridge (MIVYBRIDGE)<br>
25. Intel Haswell (MHASWELL)<br>
26. Intel Broadwell (MBROADWELL)<br>
27. Intel Skylake (MSKYLAKE)<br>
28. Intel Skylake X (MSKYLAKEX)<br>
29. Intel Cannon Lake (MCANNONLAKE)<br>
30. Intel Ice Lake (MICELAKE)<br>
31. Intel Cascade Lake (MCASCADELAKE)<br>
32. Intel Cooper Lake (MCOOPERLAKE)<br>
33. Intel Tiger Lake (MTIGERLAKE)<br>
34. Intel Sapphire Rapids (MSAPPHIRERAPIDS)<br>
35. Intel Rocket Lake (MROCKETLAKE)<br>
36. Intel Alder Lake (MALDERLAKE)<br>
37. Intel Raptor Lake (MRAPTORLAKE)<br>
38. Intel Meteor Lake (MMETEORLAKE)<br>
39. Intel Emerald Rapids (MEMERALDRAPIDS)<br>
40. Generic-x86-64 (GENERIC_CPU)<br>
41. Generic-x86-64-v2 (GENERIC_CPU2)<br>
42. Generic-x86-64-v3 (GENERIC_CPU3)<br>
43. Generic-x86-64-v4 (GENERIC_CPU4)<br>
44. Intel-Native optimizations autodetected by GCC (MNATIVE_INTEL)<br>
45. AMD-Native optimizations autodetected by GCC (MNATIVE_AMD)
				</code></pre>
			</li>

			<li>
				<code>CONFIGFILE</code>:
				<?= lang('kernel.setup.s3.configfile') ?>
			</li>

			<li>
				<code>JOBS</code>:
				<?= lang('kernel.setup.s3.jobs') ?>
			</li>

			<li>
				<code>KVER</code>:
				<?= lang('kernel.setup.s3.kver') ?>
			</li>

			<li>
				<code>PVER</code>:
				<?= lang('kernel.setup.s3.pver') ?>
			</li>

			<li>
				<code>KERNVER</code>:
				<?= lang('kernel.setup.s3.kernver') ?>
			</li>

			<li>
				<code>CUSTDIR</code>:
				<?= lang('kernel.setup.s3.custdir') ?>
			</li>

			<li>
				<code>CLEARDIR</code>:
				<?= lang('kernel.setup.s3.cleardir') ?>
			</li>

			<li>
				<code>PATCHDIR</code>:
				<?= lang('kernel.setup.s3.patchdir') ?>
			</li>

			<li>
				<code>V4L2DIR</code>:
				<?= lang('kernel.setup.s3.v4l2dir') ?>
			</li>

			<li>
				<code>CFODIR</code>:
				<?= lang('kernel.setup.s3.cfodir') ?>
			</li>

			<li>
				<code>USRDIR</code>:
				<?= lang('kernel.setup.s3.usrdir') ?>
			</li>

			<li>
				<code>KERNELDIR</code>:
				<?= lang('kernel.setup.s3.kerneldir') ?>
			</li>
		</ul>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s4">
			<a class="text-white" href="#s4">
				<?= lang('kernel.setup.s4.title') ?>
			</a>
		</h4>

		<p>
			<?= lang('kernel.setup.s4.desc') ?>
		</p>

		<div class="table-container">
		<table class="table bordered striped">
			<thead class="bg-blue-700 text-white">
				<tr>
					<th><?= lang('kernel.setup.s4.table.sflag') ?></th>
					<th><?= lang('kernel.setup.s4.table.lflag') ?></th>
					<th class="u-align-middle">
						<?= lang('kernel.setup.s4.table.desc') ?>
					</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>-b</td>
					<td>--skip-build</td>
					<td><?= lang('kernel.setup.s4.table.b') ?></td>
				</tr>

				<tr>
					<td>-c</td>
					<td>--skip-cfg</td>
					<td><?= lang('kernel.setup.s4.table.c') ?></td>
				</tr>

				<tr>
					<td>-d</td>
					<td>--distcc</td>
					<td><?= lang('kernel.setup.s4.table.d') ?></td>
				</tr>

				<tr>
					<td>-e</td>
					<td>--ccache</td>
					<td><?= lang('kernel.setup.s4.table.e') ?></td>
				</tr>

				<tr>
					<td>-f</td>
					<td>--fastmath</td>
					<td><?= lang('kernel.setup.s4.table.f') ?></td>
				</tr>

				<tr>
					<td>-h</td>
					<td>--help</td>
					<td><?= lang('kernel.setup.s4.table.h') ?></td>
				</tr>

				<tr>
					<td>-l</td>
					<td>--clearl-ps</td>
					<td><?= lang('kernel.setup.s4.table.l') ?></td>
				</tr>

				<tr>
					<td>-m</td>
					<td>--menuconfig</td>
					<td><?= lang('kernel.setup.s4.table.m') ?></td>
				</tr>

				<tr>
					<td>-o</td>
					<td>--cpu-opts</td>
					<td><?= lang('kernel.setup.s4.table.o') ?></td>
				</tr>

				<tr>
					<td>-p</td>
					<td>--patches</td>
					<td><?= lang('kernel.setup.s4.table.p') ?></td>
				</tr>

				<tr>
					<td>-v</td>
					<td>--v4l2</td>
					<td><?= lang('kernel.setup.s4.table.v') ?></td>
				</tr>
			</tbody>
		</table>
		</div>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s5">
			<a class="text-white" href="#s5">
				<?= lang('kernel.setup.s5.title') ?>
			</a>
		</h4>

		<p>
		<?= lang('kernel.setup.s5.desc') ?>

		<pre class="mb-2"><code>./build.sh -l -m -o -p</pre></code>

		<?= lang('kernel.setup.s5.cmd1.desc') ?>

		<ul>
			<li><code>-l</code>: <?= lang('kernel.setup.s5.cmd1.l') ?></li>
			<li><code>-m</code>: <?= lang('kernel.setup.s5.cmd1.m') ?></li>
			<li><code>-o</code>: <?= lang('kernel.setup.s5.cmd1.o') ?></li>
			<li><code>-p</code>: <?= lang('kernel.setup.s5.cmd1.p') ?></li>
		</ul>

		<?= lang('kernel.setup.s5.desc2') ?>
		</p>

		<p>
		<?= lang('kernel.setup.s5.desc3') ?>

		<pre><code>cp /usr/src/linux/.config config.new<br>diff -u config config.new | vim</code></pre>

		<?= lang('kernel.setup.s5.cmd2') ?>
		</p>

		<p>
		<?= lang('kernel.setup.s5.desc4') ?>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="s6">
			<a class="text-white" href="#s6">
				<?= lang('kernel.setup.s6.title') ?>
			</a>
		</h4>

		<p>
		<?= lang('kernel.setup.s6.desc') ?>

		<pre class="mb-2"><code>./build.sh -f -l -o -p</code></pre>

		<?= lang('kernel.setup.s6.cmd') ?>
		</p>

		<div class="card bg-info text-white">
			<p class="m-3">
				<?= lang('kernel.setup.s6.note') ?>
			</p>
		</div>

		<p>
			<?= lang('kernel.setup.s6.desc2') ?>
		</p>
	</div>
	</div>

	<div class="card">
	<div class="m-3">
		<h3 class="tag tag--xl bg-blue-700 my-0" id="extra">
			<a class="text-white" href="#extra">
				<?= lang('kernel.go-to.extra') ?>
			</a>
		</h3>

		<p>
			<?= lang('kernel.extra.desc') ?>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="e-v4l2">
			<a class="text-white" href="#e-v4l2">
				<?= lang('kernel.extra.v4l2.title') ?>
			</a>
		</h4>

		<p>
			<?= lang('kernel.extra.v4l2.desc') ?>
		</p>

		<p>
		<?= lang('kernel.extra.v4l2.desc2') ?>

		<pre class="mb-2"><code>options v4l2loopback exclusive_caps=1 card_label="Camera2"</code></pre>

		<?= lang('kernel.extra.v4l2.cmd') ?>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="e-initramfs">
			<a class="text-white" href="#e-initramfs">
				<?= lang('kernel.extra.initramfs.title') ?>
			</a>
		</h4>

		<p>
		<?= lang('kernel.extra.initramfs.desc') ?>
		<br>
		<?= lang('kernel.extra.initramfs.desc2') ?>

		<pre><code>
# Equivalent to -H<br>
hostonly="yes"<br>
<br>
# Add various modules<br>
# Module                Description<br>
# base                  include basic utilities<br>
# bash					include /bin/bash as /bin/sh<br>
# fs-lib                include filesystem tools like mount<br>
# kernel-modules        include kernel modules<br>
# rescue				include various utils for rescue mode<br>
# resume                allow initramfs to resume from low-power state<br>
# rootfs-block          mount block device that contains rootfs<br>
# shutdown              set up hooks to run on shutdown<br>
# udev-rules            include udev and some basic rules<br>
# uefi-lib				include UEFI tools<br>
# usrmount              mount /usr<br>
dracutmodules+=" base bash fs-lib kernel-modules rescue resume rootfs-block shutdown udev-rules uefi-lib usrmount "<br>
<br>
# Include elogind<br>
install_items="/lib64/elogind/elogind-uaccess-command"<br>
<br>
# Use lz4 to compress the initramfs<br>
compress="lz4"<br>
<br>
# Add early microcode loading<br>
early_microcode="yes"
		</code></pre>
		</p>

		<p>
		<?= lang('kernel.extra.initramfs.desc3') ?>

		<pre class="mb-2"><code>dracut --kver 6.8.2-gentoo -f</code></pre>

		<?= lang('kernel.extra.initramfs.cmd1') ?>
		<br>
		<?= lang('kernel.extra.initramfs.cmd2') ?>
		</p>

		<div class="divider"></div>

		<h4 class="tag tag--md bg-blue-700 mb-0" id="e-bootloader">
			<a class="text-white" href="#e-bootloader">
				<?= lang('kernel.extra.bootloader.title') ?>
			</a>
		</h4>

		<p>
			<?= lang('kernel.extra.bootloader.desc') ?>
		</p>

		<p>
			<?= lang('kernel.extra.bootloader.desc2') ?>
		</p>

		<p>
		<?= lang('kernel.extra.bootloader.desc3') ?>

		<pre class="mb-2"><code>grub-mkconfig -o /boot/grub/grub.cfg</code></pre>

		<?= lang('kernel.extra.bootloader.cmd') ?>
		</p>
	</div>
	</div>
	</div>

	<div class="mt-8">
		<a href="<?= site_url($locale) ?>">
			<?= lang('glob.to-main') ?>
		</a>
	</div>
</div>
</div>
</div>

<?= $this->include("static/footer") ?>
</body>
</html>
