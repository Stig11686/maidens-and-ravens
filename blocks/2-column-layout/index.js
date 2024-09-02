import { registerBlockType } from '@wordpress/blocks';
import { MediaUpload, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, PanelBody, ToggleControl } from '@wordpress/components';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType('your-theme/two-column-toggle-image', {
    edit: ({ attributes, setAttributes }) => {
        const { content, imageUrl, imageOnRight } = attributes;

        const onSelectImage = (media) => {
            setAttributes({ imageUrl: media.url });
        };

        return (
            <div {...useBlockProps()}>
                <InspectorControls>
                    <PanelBody title="Image Settings">
                        <MediaUpload
                            onSelect={onSelectImage}
                            allowedTypes={['image']}
                            value={imageUrl}
                            render={({ open }) => (
                                <Button onClick={open} variant="secondary">
                                    {!imageUrl ? 'Select Image' : 'Replace Image'}
                                </Button>
                            )}
                        />
                        <ToggleControl
                            label="Image on Right"
                            checked={imageOnRight}
                            onChange={(value) => setAttributes({ imageOnRight: value })}
                        />
                    </PanelBody>
                </InspectorControls>
                <div className={`flex flex-col lg:flex-row lg:justify-between items-start gap-10 max-w-7xl mx-auto ${imageOnRight ? 'lg:flex-row-reverse' : ''}`}>
                    <div className="image-column bg-grey-2000 h-full w-full lg:w-6/12">
                        {imageUrl && <img src={imageUrl} alt="Block Image" className="w-full h-full object-cover" />}
                    </div>
                    <div className="content-column flex flex-col items-start gap-8 decorated-list lg:order-2 lg:w-5/12">
                        <RichText
                            tagName="div"
                            value={content}
                            onChange={(content) => setAttributes({ content })}
                            placeholder="Add your content here..."
                        />
                    </div>
                </div>
            </div>
        );
    },
    save: ({ attributes }) => {
        const { content, imageUrl, imageOnRight } = attributes;

        return (
            <section className="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto">
                <div className={`flex flex-col lg:flex-row lg:justify-between items-start gap-10 max-w-7xl mx-auto ${imageOnRight ? 'lg:flex-row-reverse' : ''}`}>
                    <div className="image-column bg-grey-2000 h-full w-full lg:w-6/12">
                        {imageUrl && <img src={imageUrl} alt="Block Image" className="w-full h-full object-cover" />}
                    </div>
                    <div className="content-column flex flex-col items-start gap-8 decorated-list lg:order-2 lg:w-5/12">
                        <RichText.Content tagName="div" value={content} />
                    </div>
                </div>
            </section>
        );
    }
});
