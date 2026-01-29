
{pkgs}: {
  # Which nixpkgs channel to use.
  channel = "stable-24.05"; # or "unstable"
  # Use https://search.nixos.org/packages to find packages
  packages = [
    pkgs.php82
    pkgs.php82Packages.composer
    pkgs.nodejs_20
    pkgs.mysql80
    pkgs.phpmyadmin
  ];
  # Sets environment variables in the workspace
  env = {};
  idx = {
    # Search for the extensions you want on https://open-vsx.org/ and use "publisher.id"
    extensions = [
      # "vscodevim.vim"
      "google.gemini-cli-vscode-ide-companion"
    ];
    workspace = {
      # Runs when a workspace is first created with this `dev.nix` file
      onCreate = {
        
        default.openFiles = [ "README.md" "resources/views/welcome.blade.php" ];
      };
      # To run something each time the workspace is (re)started, use the `onStart` hook
      onStart = {
        mysql-start = ''
          mkdir -p ~/.mysql
          mysqld --initialize-insecure --user=mysql --datadir=~/.mysql
          mysqld_safe --datadir=~/.mysql &
        '';
      };
    };
    # Enable previews and customize configuration
    previews = {
      enable = true;
      previews = {
        web = {
          command = ["php" "artisan" "serve" "--port" "$PORT" "--host" "0.0.0.0"];
          manager = "web";
        };
        phpmyadmin = {
          command = ["php" "-S" "0.0.0.0:$PORT" "-t" "${pkgs.phpmyadmin}/phpmyadmin"];
          manager = "web";
        };
      };
    };
  };
}
