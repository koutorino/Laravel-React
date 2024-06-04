import { ChangeEvent, useRef, useState } from "react";
import { useGetImageUrl } from "../../hooks/useGetImageUrl";

const ImageInput = () => {
  const [image, setImage] = useState<File | null>(null);

  const fileInputRef = useRef<HTMLInputElement>(null);

  const handleInputFile = (e: ChangeEvent<HTMLInputElement>) => {
    if (e.currentTarget.files && e.currentTarget.files[0]) {
      const file = e.currentTarget.files[0];
      setImage(file);
      if (!file) {
        return;
      }
    }
  };

  const { imageUrl } = useGetImageUrl({ file: image });

  console.log(image);

  return (
    <label
      htmlFor="ImageInput"
      className="cursor-pointer h-40 flex justify-center items-center border-dotted border-gray-500 border-2 rounded-xl overflow-hidden"
    >
      {imageUrl && image ?  (
        <img className="object-cover w-full h-full" src={imageUrl} alt="アップロード画像" />
      ) : (
        '写真を選択'
      )}
      <input
        onChange={handleInputFile}
        id="ImageInput"
        className="w-3/5 hidden"
        type="file"
        accept="image/jpeg, image/png"
      />
    </label>
  );
};

export default ImageInput;
