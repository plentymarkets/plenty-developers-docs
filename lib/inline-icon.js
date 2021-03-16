function inlineIcon () {
    this.process((parent, target, attrs) => {

        const icon = target;

        let iconColour = '';
        let iconSet = 'fa fa-';

        if (attrs.set !== 'undefined') {
            if (attrs.set === 'plenty') {
                iconSet = 'psicon-';
            }
    
            else if (attrs.set === 'material') {
                iconSet = 'material-';
            }                
        }

        if (typeof attrs.role !== 'undefined' && attrs.role) {
            iconColour = ' ' + attrs.role;
        }

        text = `<span class = 'icon${iconColour}'><i class = ${iconSet}${icon}'</i></span>`;

        // inlineNode = this.createInline(parent, 'image', null, { 'target': 'text' }).convert();

        return text;
    })
}

function register (registry) {
    registry.inlineMacro('icon', inlineIcon)
}

module.exports.register = register