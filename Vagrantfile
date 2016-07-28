# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    
    # install scotch/box
    config.vm.box = "scotch/box"
    
    # fix for "stdin: is not a tty" message
    config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
    
    # assign ip address for private network
    config.vm.network "private_network", ip: "192.168.33.14"
    
    # set hostname
    config.vm.hostname = "adaptivenav"
    
    # sync development environment between host and guest
    config.vm.synced_folder "./", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    
    config.vm.provision "shell" do |s|
        # path to shell provisioning script
        s.path = "./resources/provision/install.sh"
    end

end