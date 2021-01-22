this._treeConfig.addNode({
            id: 'my-new-view',
            name: this.translation.translate('my-new-view'),
            isVisible: true,
            isActive: this.router.isActive('plugin/my-new-view', true),
            onClick: (): void => {
                this.router.navigateByUrl('plugin/my-new-view');
            }
        });
