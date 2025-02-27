/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
import {PanelBody, SelectControl} from '@wordpress/components';
import {InnerBlocks, InspectorControls} from '@wordpress/block-editor';

const AOS_OPTIONS = [
    { label: 'Fade Up', value: 'fade-up' },
    { label: 'Fade Down', value: 'fade-down' },
    { label: 'Fade Left', value: 'fade-left' },
    { label: 'Fade Right', value: 'fade-right' }
];
export default function Edit({ attributes, setAttributes }) {
	return (
		<>
		<InspectorControls>
			<PanelBody title={__('Static AOS Settings' , 'school-static-aos')}>
				<SelectControl
					label={__('AOS Animation', 'school-static-aos')}
					value={attributes.animation}
					options={AOS_OPTIONS}
					onChange={(value) => setAttributes({ animation: value })}
				/>
			</PanelBody>
		</InspectorControls>
		<div { ...useBlockProps()} data-aos={attributes.animation}>
			<InnerBlocks />
		</div>		
		</>
	);
}
