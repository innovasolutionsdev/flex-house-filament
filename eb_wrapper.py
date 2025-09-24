#!/usr/bin/env python3
"""
Simple EB CLI wrapper that avoids Windows-specific migration features
"""
import sys
import os

def patch_migrate_module():
    """Patch the migrate module to avoid IIS dependency"""
    import importlib.util

    # Create a dummy migrate module
    migrate_spec = importlib.util.spec_from_loader("ebcli.controllers.migrate", loader=None)
    migrate_module = importlib.util.module_from_spec(migrate_spec)

    # Create a base controller class that mimics the expected interface
    from cement.core.controller import CementBaseController

    try:
        # Import the base controller from EB CLI
        from ebcli.core.abstractcontroller import AbstractBaseController
        base_class = AbstractBaseController
    except ImportError:
        # Fallback to cement base controller
        base_class = CementBaseController

    # Add dummy controller classes
    class MigrateController(base_class):
        class Meta:
            label = 'migrate'
            description = 'Migration commands (disabled on Windows)'

    class MigrateExploreController(base_class):
        class Meta:
            label = 'migrate-explore'
            description = 'Migration exploration (disabled on Windows)'

    class MigrateCleanupController(base_class):
        class Meta:
            label = 'migrate-cleanup'
            description = 'Migration cleanup (disabled on Windows)'

    migrate_module.MigrateController = MigrateController
    migrate_module.MigrateExploreController = MigrateExploreController
    migrate_module.MigrateCleanupController = MigrateCleanupController

    sys.modules['ebcli.controllers.migrate'] = migrate_module

def main():
    # Get the command line arguments
    args = sys.argv[1:] if len(sys.argv) > 1 else ['--version']

    if args[0] == '--version':
        print("EB CLI 3.25 (wrapper)")
        return 0

    try:
        # Add EB CLI to Python path
        sys.path.insert(0, r"C:\Users\TUF\AppData\Roaming\Python\Python313\site-packages")

        # Patch the problematic module before importing
        patch_migrate_module()

        # Now import and run EB CLI
        from ebcli.core.ebcore import main as eb_main

        # Set sys.argv for EB CLI
        original_argv = sys.argv
        sys.argv = ['eb'] + args

        try:
            return eb_main()
        finally:
            sys.argv = original_argv

    except Exception as e:
        print(f"Error running EB CLI: {e}", file=sys.stderr)
        print("Consider using Docker or WSL for full EB CLI functionality.", file=sys.stderr)
        return 1

if __name__ == '__main__':
    sys.exit(main() or 0)